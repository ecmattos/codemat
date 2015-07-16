<?php

namespace CodeMat\Http\Requests;

use CodeMat\Http\Requests\Request;

class CityRequest extends Request
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
            'uf_id' => 'required',
            'cidade_nome' => 'max:70|required|unique:cities,cidade_nome,'.$this->id.''
        ];
    }

    public function messages()
    {
        return [
            'uf_id.required' => '<b>UF</b> >> Preenchimento obrigatório.',
            
            'cidade_nome.max' => '<b>Descrição</b> >> MÁXIMO 70 caracteres.',
            'cidade_nome.required' => '<b>Descrição</b> >> Preenchimento obrigatório.',
            'cidade_nome.unique' => '<b>Descrição</b> >> Indisponível.'
        ];
    }
}
