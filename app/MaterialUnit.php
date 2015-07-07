<?php

namespace CodeMat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterialUnit extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //
    protected $fillable = [
    	'mat_unid',
    	'mat_unid_desc'
    ];

    public function materials()
    {
     	return $this->hasMany('CodeMat\Material');   
    }

    public function scopeSearchUnitDesc($query, $search_unit_desc)
    {
        #dd("scope: ".$search_unit_desc);
        return $query->where('mat_unid', 'LIKE', "%$search_unit_desc%")
                     ->orWhere('mat_unid_desc', 'LIKE', "%$search_unit_desc%")->get();
    }
}
