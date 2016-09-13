<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function comments(){
    	return $this->hasMany('App\Comment','post_id');
    }

    public function tags() {
    	return $this->belongsToMany('App\Tags', 'posts_tags');
    }
}
