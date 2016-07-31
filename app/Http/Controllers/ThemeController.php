<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\NhanvienModel;
use App\PhongbanModel;
use App\ChucvuModel;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
class ThemeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
       $dataNhansu=NhanvienModel::paginate(5);
       $dataPhongban=PhongbanModel::all();
       $dataChucvu=ChucvuModel::all();
       $dataCongviec=DB::table('tbl_pccongviec')->get();
       $dataBangcap=DB::table('tbl_bangcap')->get();
		return view('index', compact(['dataNhansu', 'dataPhongban','dataChucvu','dataCongviec','dataBangcap']));
	}


}
