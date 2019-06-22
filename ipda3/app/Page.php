<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Page extends Model 
{

    protected $table = 'pages';
    public $timestamps = true;
    protected $fillable = array('title', 'image', 'contains');

}