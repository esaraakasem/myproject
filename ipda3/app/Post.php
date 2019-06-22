<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('image', 'date', 'text', 'catogery_id', 'title');

    public function category()
    {
        return $this->belongsTo('App\Catogery','catogery_id');
    }

}
