<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'content', 'thumbnail', 'category_id', 'online'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
