<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\HopdongRequest;
use App\HopdongModel;
class HopdongController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HopdongRequest $request)
	{
		$post=new HopdongModel;
		$id=$request->id;
		$post->so_quyet_dinh=$request->so_quyet_dinh;
		$post->tu_ngay=$request->tu_ngay;
		$post->den_ngay=$request->den_ngay;
		$post->loai_hop_dong=$request->loai_hop_dong;
		$post->ghi_chu=$request->ghi_chu;
		$post->save();
		return Redirect::to('show/hopdong'.$id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data=HopdongModel::find($id);
		$require = 'cap_nhat_hop_dong';
		return $data;
        //return view('call')->nest('content', $require, array('tt_hopdong' => $data));
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post=HopdongModel::find($id);
		$post->so_quyet_dinh=$request->so_quyet_dinh;
		$post->tu_ngay=$request->tu_ngay;
		$post->den_ngay=$request->den_ngay;
		$post->loai_hop_dong=$request->loai_hop_dong;
		$post->ghi_chu=$request->ghi_chu;
		$post->save();
		return Redirect::to('show/hopdong'.$id);
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
