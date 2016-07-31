<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CongviecModel;
use App\NhanvienModel;
use App\PhongbanModel;
use App\ChucvuModel;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class ApiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 header('Content-Type: application/json; charset=utf-8');
		 $data=NhanvienModel::all()->toJson();
		 $data2='{"nhansu":'.$data."}";
		 return($data2);
	}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		echo "create";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
 
 
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

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		echo "show.'$id'";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		echo "edit.'$id'";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	}

}
