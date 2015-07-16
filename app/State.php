<?php

namespace CodeMat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //
    protected $fillable = [
    	'uf',
    	'nome'
    ];

    public function cities()
    {
     	return $this->hasMany('CodeMat\City');   
    }

    public function service_units()
    {
        return $this->hasMany('CodeMat\ServiceUnit');   
    }
}
