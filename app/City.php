<?php

namespace CodeMat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //
    protected $fillable = [
    	'uf_id',
    	'cidade_nome'
    ];

    public function state()
    {
        return $this->belongsTo('CodeMat\State','uf_id'); 
    }

    public function service_units()
    {
        return $this->hasMany('CodeMat\ServiceUnit');   
    }

    public function scopeOfSearchNome($query, $search_nome)
    {
        if ($search_nome!=null)
            {
                return $query->where('cidade_nome', 'LIKE', "%$search_nome%")
                     ->orderBy('cidade_nome', 'asc')->get();
            }
    }

    public function scopeOfSearchState($query, $id)
    {
        if ($id!=null)
            {
                return $query->where('uf_id', '=', $id)
                     ->orderBy('cidade_nome', 'asc')->get();
            }
    }
}
