<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoRequest extends FormRequest
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

            'nome' => 'required| unique:servicos',
            'descricao' => 'required',
            'codigo' => 'required| unique:servicos'

        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome não pode estar em brano',
            'descricao.required' => 'O campo descricao não pode estar em branco',
            'codigo.required' => 'O campo código não pode estar em branco',
            'codigo.unique' => 'O código deve ser único',
            'nome.unique' => 'O nome deve ser único'

        ];

    }
}
