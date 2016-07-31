<?php
//Route::get('/', 'UserController@index');


Route::get('/', function() {
    if (Auth::check()) {
        return redirect('home.html');
    } else {
        return redirect('auth/login');
    }
});

Route::filter("checkLogin", function() {
    if (Auth::check() == null) {
        return Redirect::to("auth/login");
    }
});
Route::get('home.html', array("before" => "checkLogin", "uses" => "ThemeController@index"));

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('auth/login', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);

Route::post('auth/login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);


//Route::get('/array',['name'=>'get.array','uses'=>'HomeController@showWelcome']);
//Route::get('/string','HomeController@showWelcome');
//Route::get('/them-san-pham', array("before"=>"checkLogin","uses"=>"ProductController@store")); 

Route::get('nhansu', 'NhanvienController@index');
// Route::controller('san-pham', 'UserController');

Route::get('show/{tt}/{id}', array("before" => "checkLogin", "uses" => "NhanvienController@show"));
Route::get('showpage/{id}', array("before" => "checkLogin", "uses" => "NhanvienController@showpage"));
Route::get('update/{id}', 'NhanvienController@edit');

Route::get('delete/{id}', function($id) {
    DB::table('tbl_nhanvien')->where('ma_nhan_vien', $id)->delete();
    return Redirect::to("/");
});


Route::get('congviec', function() {
    return view('cap_nhat_thong_tin_cong_viec');
});
Route::get('edit/{id}', 'NhanvienController@edit');
Route::post('update/{id}', 'NhanvienController@update');
Route::get('/createNhansu', 'NhanvienController@create');
Route::post('/storeNhansu', 'NhanvienController@store');
Route::get('phongban', 'PhongbanController@index');
Route::get('chucvu', 'ChucvuController@index');

Route::post('storeCongviec', 'CongviecController@store');
Route::get('createCongviec/{id}', 'CongviecController@create');
Route::post('updateCongviec/{id}', 'CongviecController@update');


Route::get('/createPhongban', 'PhongbanController@create');
Route::post('/storePhongban', 'PhongbanController@store');
Route::get('/deletePhongban/{id}', 'PhongbanController@destroy');
Route::get('editPhongban/{id}', 'PhongbanController@edit');
Route::post('updatePhongban/{id}', 'PhongbanController@update');

Route::get('/createChucvu', 'ChucvuController@create');
Route::post('/storeChucvu', 'ChucvuController@store');
Route::get('/deleteChucvu/{id}', 'ChucvuController@destroy');
Route::get('editChucvu/{id}', 'ChucvuController@edit');
Route::post('updateChucvu/{id}', 'ChucvuController@update');

Route::post('/search', 'SearchController@index');


Route::get('showjoin', function() {
    $data = App\CongviecModel::find('001')->phongban()->get();
    print_r($data);
});
//Route::get('get',function(){
//return view('call')->nest('content','call2',array());
//return view('call');
//});
/*
  Route::filter("/", function(){
  if(Auth::user()->id !=0)
  {
  return Redirect::to("index");
  }
  else{
  return redirect('auth/login');
  }
  }); */
Route::get('getjoinphong', function() {
    $data = App\CongviecModel::find(001)->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('adduser', ['as' => 'getadduser', 'uses' => 'MemberController@getadduser']);
Route::post('adduser', ['as' => 'postadduser', 'uses' => 'MemberController@postadduser']);

Route::get('print/{id}', function($id) {
    $pdf = App::make('dompdf.wrapper');
    $data = DB::table('tbl_congviec')
        ->join('tbl_nhanvien', 'tbl_nhanvien.ma_nhan_vien', '=', 'tbl_congviec.ma_nhan_vien')
        ->join('tbl_phongban', 'tbl_phongban.phong_ban_id', '=', 'tbl_congviec.phong_ban_id')
        ->join('tbl_chucvu', 'tbl_chucvu.chuc_vu_id', '=', 'tbl_congviec.chuc_vu_id')
        ->join('tbl_pccongviec', 'tbl_pccongviec.cong_viec_id', '=', 'tbl_congviec.cong_viec_id')
        ->join('tbl_bangcap', 'tbl_bangcap.bang_cap_id', '=', 'tbl_congviec.bang_cap_id')
        ->join('tbl_hopdong', 'tbl_hopdong.ma_nhan_vien', '=', 'tbl_congviec.ma_nhan_vien')
        ->where('tbl_congviec.ma_nhan_vien', '=', $id)
        ->get();
    $html = View::make('print', compact('data'));
    $pdf->loadHTML($html);
    return $pdf->stream($id . '.pdf');
//return $pdf->save('public/my_stored_file.pdf')->stream($name.'.pdf');
//return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
});

Route::group(["prefix" => "api",'middleware' => 'cors'], function() {

    Route::post('storeapi',function(){
	$postdata = file_get_contents("php://input");
	 if (isset($postdata)) {
	 $request = json_decode($postdata);
	 $username = $request->username;
	 
	 if ($username != "") {
	 echo "Server returns: " . $username;
	 }
	 else {
	 echo "Empty username parameter!";
	 }
	 }
	 else {
	 echo "Not called properly with username parameter!";
	 }
	});

    Route::get('nhansu', function(App\NhanvienModel $request) {
        header('Content-Type: application/json; charset=utf-8');
        $data = $request::all()->toJson();
        $data2 = '{"nhansu":' . $data . "}";
        return($data2);
    });
    Route::get('detail/{id}', function($id) {
        $data = DB::table('tbl_congviec')
            ->join('tbl_nhanvien', 'tbl_nhanvien.ma_nhan_vien', '=', 'tbl_congviec.ma_nhan_vien')
            ->join('tbl_phongban', 'tbl_phongban.phong_ban_id', '=', 'tbl_congviec.phong_ban_id')
            ->join('tbl_chucvu', 'tbl_chucvu.chuc_vu_id', '=', 'tbl_congviec.chuc_vu_id')
            ->join('tbl_pccongviec', 'tbl_pccongviec.cong_viec_id', '=', 'tbl_congviec.cong_viec_id')
            ->join('tbl_bangcap', 'tbl_bangcap.bang_cap_id', '=', 'tbl_congviec.bang_cap_id')
            ->where('tbl_congviec.ma_nhan_vien', '=', $id)
            ->get();
        $json = json_encode($data);
        return $json;
    });
    Route::get('phongban', function(App\PhongbanModel $request) {
        $data = $request::all()->toJson();
        return $data;
    });
    Route::get('chucvu', function(App\ChucvuModel $request) {
        $data = $request::all()->toJson();
        return $data;
    });
});


//Route::resource('Api', 'ApiController');

Route::post('/storeapi','ApiController@store');
