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
            'password' => 'required| max:8| '
        ];
    }

    public function messages(){
        return [
            'nome.required'=>'O campo nome não pode estar em branco',
            'sobrenome.required' => 'O Campo sobrenome não pode estar em branco',
            'email.required' => 'O Campo email  não pode estar em branco',
            'email.unique' => 'O campo email deve ser único',
            'cargo.required' => 'O campo cargo não pode estar em branco',
            'password.required' => 'O campo password não pode estar em branco',
            'password.max' => 'A password não pode ter mais de 8 carácteres',
            'username.required'=> 'O nome do usuário não pode estar branco'

        ];
    }
}
