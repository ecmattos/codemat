<?php

namespace CodeMat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceUnit extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //
    protected $fillable = [
    	'ua_uf_id',
        'ua_cidade_id',
        'ua_cod',
        'ua_desc',
        'ua_end',
        'ua_logradouro',
        'ua_nr_predial',
        'ua_complemento',
        'ua_bairro',
        'ua_cep',
        'ua_fone',
        'ua_fax',
        'ua_email'
    ];

    public function state()
    {
        return $this->belongsTo('CodeMat\State','ua_uf_id'); 
    }

    public function city()
    {
        return $this->belongsTo('CodeMat\City','ua_cidade_id'); 
    }
}
