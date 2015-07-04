<?php

namespace CodeMat\Http\Requests;

use CodeMat\Http\Requests\Request;

class MaterialStatusRequest extends Request
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
            'mat_sit' => 'max:5|required|unique:material_statuses,mat_sit,'.$this->id.'',
            'mat_sit_desc' => 'max:15|required|unique:material_statuses,mat_sit_desc,'.$this->id.''
            //
        ];
    }

    public function messages()
    {
        return [
            'mat_sit.max' => 'MÁXIMO 5 caracteres.',
            'mat_sit.required' => 'Obrigatório.',
            'mat_sit.unique' => 'Indisponível.',
           
            'mat_sit_desc.max' => 'MÁXIMO 15 caracteres.',
            'mat_sit_desc.required' => 'Obrigatório.',
            'mat_sit_desc.unique' => 'Indisponível.'
        ];
    }
}
