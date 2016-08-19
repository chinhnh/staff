<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NhanvienModel;
use Input,File;
use App\Http\Requests\NhanvienRequest;
use DB;
use App\Http\Requests\HopdongRequest;
use App\HopdongModel;
class NhanvienController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   $require='nhansu';
        $data=NhanvienModel::paginate(8);
        return view('call')->nest('content',$require,array('data' => $data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $require = "them_moi_nhan_vien";
        return view('call')->nest('content', $require, array());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {
     $filename=$request->file('images')->getClientOriginalName();
        $post = new nhanvienModel;
        $post->ma_nhan_vien = \Request::get('ma_nv');
        $id= \Request::get('ma_nv');
        $post->ho_ten = \Request::get('ho_ten');
        $post->email = \Request::get('email');
        $post->ngay_sinh = \Request::get('ngay_sinh');
        $post->gioi_tinh = \Request::get('gioi_tinh');
        $post->dia_chi = \Request::get('dia_chi');
        $post->dien_thoai = \Request::get('dien_thoai');
        $post->nghi_viec = \Request::get('nghi_viec');
        $post->images=$filename;
        $request->file('images')->move('resources/upload/',$filename);
        $post->save();
       // return \Redirect::to('nhansu');
        return \Redirect::to('createCongviec/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($tt, $id)
    {
        $require='chi_tiet_nhan_vien';
        $data = DB::table('tbl_nhanvien')->where('ma_nhan_vien', $id)->get();
        $dataCongviec = DB::table('tbl_congviec')->where('ma_nhan_vien', $id)->get();
        $dataHopdong= DB::table('tbl_hopdong')->where('ma_nhan_vien', $id)->get();
        $dataGiadinh= DB::table('tbl_quanhegiadinh')->where('ma_nhan_vien', $id)->get();
        return view('call')->nest('content',$require,
            array('id'=>$id,'tt'=>$tt,'dataNhanvien'=>$data,'dataCongviec'=>$dataCongviec,'dataHopdong'=>$dataHopdong ,'dataGiadinh'=>$dataGiadinh));
    }

   public function showpage($id)
   {     
     $require='chi_tiet_nhan_vien_page';
        $data=DB::table('tbl_congviec')
        ->join('tbl_nhanvien','tbl_nhanvien.ma_nhan_vien','=','tbl_congviec.ma_nhan_vien')
        ->join('tbl_phongban','tbl_phongban.phong_ban_id','=','tbl_congviec.phong_ban_id')
        ->join('tbl_chucvu','tbl_chucvu.chuc_vu_id','=','tbl_congviec.chuc_vu_id')
        ->join('tbl_pccongviec','tbl_pccongviec.cong_viec_id','=','tbl_congviec.cong_viec_id')
        ->join('tbl_bangcap','tbl_bangcap.bang_cap_id','=','tbl_congviec.bang_cap_id')
        ->join('tbl_hopdong','tbl_hopdong.ma_nhan_vien','=','tbl_congviec.ma_nhan_vien')
        ->where('tbl_congviec.ma_nhan_vien','=',$id)
        ->get();
        $json=json_encode($data);
         return view('call')->nest('content',$require,
            array('id'=>$id,'data'=>$json));
   }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($tt, $id)
    {
        //
        Switch ($tt) {
            case "cong-viec":
                return view('cap_nhat_thong_tin_cong_viec', compact('id'));
                break;


            default :

                return view('cap_nhat_thong_tin_nhan_vien', compact('id'));
                break;
        }
        //return view('update',compact(['tt','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {   
          $name = Input::file('images');
        $post = nhanvienModel::find($id);
        $img= $post->images;
        $post->ma_nhan_vien = $id;       
        $post->ho_ten = \Request::get('ho_ten');
        $post->email = \Request::get('email');
        $post->ngay_sinh = \Request::get('ngay_sinh');
        $post->gioi_tinh = \Request::get('gioi_tinh');
        $post->dia_chi = \Request::get('dia_chi');
        $post->dien_thoai = \Request::get('dien_thoai');
        $post->nghi_viec = \Request::get('nghi_viec');
        
        if(isset($name)){
        $filename=$name->getClientOriginalName();
        $post->images=$filename;
        $name->move('resources/upload/',$filename);
        }else{

            $post->images=$img; 
        }

        
        $post->save();
       return \Redirect::to('show/thong-tin/'.$id);
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        nhanvienModel::destroy($id);
        return \Redirect::to('/');
    }
}
