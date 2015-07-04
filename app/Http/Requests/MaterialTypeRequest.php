<?php

namespace CodeMat\Http\Requests;

use CodeMat\Http\Requests\Request;

class MaterialTypeRequest extends Request
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
            'mat_tipo' => 'max:5|required|unique:material_types,mat_tipo,'.$this->id.'',
            'mat_tipo_desc' => 'max:15|required|unique:material_types,mat_tipo_desc,'.$this->id.''
            //
        ];
    }

    public function messages()
    {
        return [
            'mat_tipo.max' => 'MÁXIMO 5 caracteres.',
            'mat_tipo.required' => 'Obrigatório.',
            'mat_tipo.unique' => 'Indisponível.',
           
            'mat_tipo_desc.max' => 'MÁXIMO 15 caracteres.',
            'mat_tipo_desc.required' => 'Obrigatório.',
            'mat_tipo_desc.unique' => 'Indisponível.'
        ];
    }
}
