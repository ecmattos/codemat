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
            'mat_cod.max' => 'MÁXIMO 10 caracteres.',
            'mat_cod.required' => 'Obrigatório.',
            'mat_cod.unique' => 'Indisponível.',
           
            'mat_desc.max' => 'MÁXIMO 150 caracteres.',
            'mat_desc.required' => 'Obrigatório.',
            'mat_desc.unique' => 'Indisponível.',

            'mat_vlr_ult_aquis.required' => 'Obrigatório.'
        ];
    }
}
