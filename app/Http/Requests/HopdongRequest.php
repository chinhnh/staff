<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class HopdongRequest extends Request {

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
		'so_quyet_dinh'=>'required',
		'tu_ngay'=>'required',
		'den_ngay'=>'required',
		'loai_hop_dong'=>'required',
		'ghi_chu'=>'required'
			//
		];
	}
		public function messages(){
		return[
			'so_quyet_dinh.required'=>'so_quyet_dinh not empty',
			'tu_ngay.required'=>'tu_ngay not empty',
			'den_ngay.required'=>'den_ngay not empty',
			'loai_hop_dong.required'=>'loai_hop_dong not empty',
			'ghi_chu.required'=>'ghi_chu not empty',
		];
	}

}
