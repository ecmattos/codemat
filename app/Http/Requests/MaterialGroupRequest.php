<?php

namespace CodeMat\Http\Requests;

use CodeMat\Http\Requests\Request;

class MaterialGroupRequest extends Request
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
            'mat_classe_cod' => 'max:10|required|unique:material_groups,mat_classe_cod,'.$this->id.'',
            'mat_classe_desc' => 'max:60|required|unique:material_groups,mat_classe_desc,'.$this->id.''
            //
        ];
    }

    public function messages()
    {
        return [
            'mat_classe_cod.max' => 'MÁXIMO 10 caracteres.',
            'mat_classe_cod.required' => 'Obrigatório.',
            'mat_classe_cod.unique' => 'Indisponível.',
           
            'mat_classe_desc.max' => 'MÁXIMO 60 caracteres.',
            'mat_classe_desc.required' => 'Obrigatório.',
            'mat_classe_desc.unique' => 'Indisponível.'
        ];
    }
}
