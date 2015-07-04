<?php

namespace CodeMat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterialType extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //
    protected $fillable = [
    	'mat_tipo',
    	'mat_tipo_desc'
    ];

    public function materials()
    {
     	return $this->hasMany('CodeMat\Material');   
    }
}
