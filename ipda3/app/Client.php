<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('image', 'phone', 'name', 'neighborhood', 'phone1', 'password', 'date','catogery_id','city');
    protected $visible = array('catogery_id', 'city');

    public function catogeries()
    {
        return $this->belongsTo('Catogery','catogery_id');
    }

}
