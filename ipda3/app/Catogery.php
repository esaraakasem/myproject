<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Catogery extends Model 
{

    protected $table = 'catogeries';
    public $timestamps = true;
    protected $fillable = array('name');

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }

}
