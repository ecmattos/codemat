<?php

namespace CodeMat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //
    protected $fillable = [
    	'mat_cod',
    	'mat_desc',
    	'mat_especificacao',
    	'mat_referencia',
    	'mat_vlr_ult_aquis',
    	'mat_unid_id',
        'mat_tipo_id',
        'mat_sit_id',
        'mat_classe_id'

    ];

    public function material_unit()
    {
        return $this->belongsTo('CodeMat\MaterialUnit');   
    }

    public function material_type()
    {
        return $this->belongsTo('CodeMat\MaterialType');   
    }

    public function material_status()
    {
        return $this->belongsTo('CodeMat\MaterialStatus');   
    }

    public function material_group()
    {
        return $this->belongsTo('CodeMat\MaterialGroup');   
    }
}
