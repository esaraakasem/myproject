<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model 
{

    protected $table = 'sliders';
    public $timestamps = true;
    protected $fillable = array('title', 'contain','image');
    protected $visible = array('image');

}
