<?php

namespace CodeMat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterialGroup extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //
    protected $fillable = [
    	'mat_classe_cod',
    	'mat_classe_desc'
    ];

    public function materials()
    {
     	return $this->hasMany('CodeMat\Material');   
    }
}
