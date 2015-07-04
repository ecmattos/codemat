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
            'mat_unid.max' => 'MÁXIMO 5 caracteres.',
            'mat_unid.required' => 'Obrigatório.',
            'mat_unid.unique' => 'Indisponível.',
           
            'mat_unid_desc.max' => 'MÁXIMO 30 caracteres.',
            'mat_unid_desc.required' => 'Obrigatório.',
            'mat_unid_desc.unique' => 'Indisponível.'
        ];
    }
}
