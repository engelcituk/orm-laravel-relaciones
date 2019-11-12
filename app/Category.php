<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public  function posts() 
    {
        return hasMany(Post::class);
    }
    public  function videos() 
    {
        return hasMany(Video::class);
    }
}
