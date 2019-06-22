<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Question extends Model 
{

    protected $table = 'questions';
    public $timestamps = true;
    protected $fillable = array('email', 'response', 'question');

}
