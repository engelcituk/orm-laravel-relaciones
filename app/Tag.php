<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public  function posts() {

        return morphedByMany(Post::class,'taggable');
    }

    public  function videos() {

        return belongsTo(Video::class, 'taggable');

    }
    
}
