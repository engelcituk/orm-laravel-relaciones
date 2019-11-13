<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public  function user() {

        return belongsTo(User::class);
    }

    public  function category() {

        return belongsTo(Category::class);

    }
    public function comments(){

        return $this->morphMany(Comment::class, 'commentable');

    }
    public function image(){

        return $this->morphOne(Image::class, 'imageable');
        
    }
    public function tags(){

        return $this->morphToMany(Tag::class, 'taggable');
    }
}
