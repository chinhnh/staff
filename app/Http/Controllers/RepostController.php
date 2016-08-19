<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\RepostModel;
use App\Http\Requests\RepostRequest;

class RepostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data=RepostModel::all();
		$request='repost';
		return view('call')->nest('content',$request,array('repostdata'=>$data));
	}
  public function show($id){
  	$data=RepostModel::find($id);
  	$request='repost-detail';
  	return view('call')->nest('content',$request, array('data'=>$data));
  }

	    public function store(RepostRequest $request)
    {
		$post = new RepostModel;
		 $post->title = $request->title;
        $post->message = \Request::get('message');
        $post->address='1';
		$post->save();
		return \Redirect::to('repost');
	}


	public function destroy($id)
	{
		RepostModel::destroy($id);
		return \Redirect::to('repost');
	}

}
