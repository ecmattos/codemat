<?php

namespace CodeMat\Http\Requests;

use CodeMat\Http\Requests\Request;

class MaterialRequest extends Request
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
            'mat_cod' => 'max:10|required|unique:materials,mat_cod,'.$this->id.'',
            'mat_desc' => 'max:150|required|unique:materials,mat_desc,'.$this->id.'',
            'mat_vlr_ult_aquis' => 'required'
            //
        ];
    }

    public function messages()
    {
        return [
            'mat_cod.max' => '<b>Código</b> >> MÁXIMO 10 caracteres.',
            'mat_cod.required' => '<b>Código</b> >> Preenchimento obrigatório.',
            'mat_cod.unique' => '<b>Código</b> >> Indisponível.',
           
            'mat_desc.max' => 'MÁXIMO 150 caracteres.',
            'mat_desc.required' => '<b>Descrição</b> >> Preenchimento obrigatório.',
            'mat_desc.unique' => '<b>Descrição</b> >> Indisponível.',

            'mat_vlr_ult_aquis.required' => '<b>Valor Unitário (R$)</b> >> Preenchimento obrigatório.'
        ];
    }
}
