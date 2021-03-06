<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            //
            'name'=>'required|min:3|max:255|unique:users',
            'type'=>'required|max:255',
            'phone'=>'required|min:10|max:11',
            'email'=>'required|max:255|unique:users',
            'password'=>'required|min:8|max:255',



        ];
    }
}
