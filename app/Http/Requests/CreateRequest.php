<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
           'id' =>'required',
            'group'=>'required',
            'name'=>'required',
            'birthday'=>'required|numeric',
            'gender'=>'required',
            'phone'=>'required|numeric',
            'card'=>'required|numeric',
            'email'=>'required|email',
            'address'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'trường này không được để trống',
            'group.required' => 'trường này không được để trống',
            'name.required' => 'trường này không được để trống',
            'birthday.required' => 'trường này không được để trống',
            'birthday.numeric' => 'trường này nhập số',
            'gender.required' => 'trường này không được để trống',
            'phone.required' => 'trường này không được để trống',
            'phone.numeric' => 'trường này nhập số',
            'card.required' => 'trường này không được để trống',
            'email.required' => 'trường này không được để trống',
            'email.email' => 'trường này mail',
            'address.required' => 'trường này không được để trống',
        ];
    }
}
