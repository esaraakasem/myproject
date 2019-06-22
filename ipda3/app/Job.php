<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Job extends Model 
{

    protected $table = 'jobs';
    public $timestamps = true;
    protected $fillable = array('detail');

}