<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model 
{

    protected $table = 'setting';
    public $timestamps = true;
    protected $fillable = array('facebook', 'twitter', 'instegram', 'youtube', 'google');

}