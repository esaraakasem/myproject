<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Connect extends Model 
{

    protected $table = 'connects';
    public $timestamps = true;
    protected $fillable = array('name', 'address', 'email', 'addressmessage', 'text');

}