<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RepostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title'=>'required',
			'message'=>'required'
		];
	}
	public function messages(){
		return[
		'title.required'=>'title empty',
		'message.required'=>'message empty'
		];
	}

}
