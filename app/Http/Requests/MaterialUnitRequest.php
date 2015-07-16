<?php

namespace CodeMat\Http\Requests;

use CodeMat\Http\Requests\Request;

class MaterialUnitRequest extends Request
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
            'mat_unid' => 'max:5|required|unique:material_units,mat_unid,'.$this->id.'',
            'mat_unid_desc' => 'max:30|required|unique:material_units,mat_unid_desc,'.$this->id.''
            //
        ];
    }

    public function messages()
    {
        return [
            'mat_unid.max' => '<b>Unidade</b> >> MÁXIMO 5 caracteres.',
            'mat_unid.required' => '<b>Unidade</b> >> Preenchimento obrigatório.',
            'mat_unid.unique' => '<b>Unidade</b> >> Indisponível.',
           
            'mat_unid_desc.max' => '<b>Descrição</b> >> MÁXIMO 30 caracteres.',
            'mat_unid_desc.required' => '<b>Descrição</b> >> Preenchimento obrigatório.',
            'mat_unid_desc.unique' => '<b>Descrição</b> >> Indisponível.'
        ];
    }
}
