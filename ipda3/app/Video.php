<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Video extends Model 
{

    protected $table = 'videos';
    public $timestamps = true;
    protected $fillable = array('video', 'title', 'image', 'description');

}