<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //it was false but i change it to true
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
            'first_name' => 'required|max:10|min:2',
            'second_name' => 'required|max:10|min:2',
            'client_phone' => 'required|digits:11',
            'guests_number' => 'required|numeric|min:1|max:100',
		    'comment'=>'required',
            'date'=>'required',
            //
        ];
    }
}
