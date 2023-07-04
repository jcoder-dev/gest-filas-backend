<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' =>'required|max:255',
            'sobrenome' =>'required',
            'email' => 'required|unique:funcionarios',
            'username' => 'required| unique:funcionarios|',
            'cargo' => 'required|',
            'password' => 'required| max:20| '
        ];
    }

    public function messages(){
        return [

        ];
    }
}
