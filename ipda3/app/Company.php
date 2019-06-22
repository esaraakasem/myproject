<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Company extends Model 
{

    protected $table = 'companies';
    public $timestamps = true;
    protected $fillable = array('name', 'detail');

}