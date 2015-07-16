<?php

namespace CodeMat\Http\Requests;

use CodeMat\Http\Requests\Request;

class StateRequest extends Request
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
            'uf' => 'max:2|required|unique:states,uf,'.$this->id.'',
            'nome' => 'max:20|required|unique:states,nome,'.$this->id.''
            //
        ];
    }

    public function messages()
    {
        return [
            'uf.max' => '<b>UF</b> >> MÁXIMO 2 caracteres.',
            'uf.required' => '<b>UF</b> >> Preenchimento obrigatório.',
            'uf.unique' => '<b>UF</b> >> Indisponível.',
           
            'nome.max' => '<b>Descrição</b> >> MÁXIMO 20 caracteres.',
            'nome.required' => '<b>Descrição</b> >> Preenchimento obrigatório.',
            'nome.unique' => '<b>Descrição</b> >> Indisponível.'
        ];
    }
}
