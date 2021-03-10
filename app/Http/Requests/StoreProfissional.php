<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfissional extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'required',
            'titulo'=>'required',
            'email'=> 'required|email:rfc,dns|unique',
            'password'=> 'required|password:api',
            'taxa'=>'required|integer',
            'skills'=>'required',
            'disponibilidade'=>'required'
        ];
    }
}
