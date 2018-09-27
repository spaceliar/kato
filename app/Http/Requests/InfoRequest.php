<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
{
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
            'name'      =>  'required|max:255|min:10',
            'address'   =>  'required|max:255|min:20',
            'phone'     =>  'required|max:255|min:9',
            'fax'       =>  'required|max:255|min:9',
            'email'     =>  'required|max:255|min:6',
        ];
    }
}
