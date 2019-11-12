<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Level extends Model
{
    public  function users() //un nivel tiene muchos usuarios
    {
        return hasMany(User::class);
    }
    public  function posts(){
        return hasManyThrough(Post::class, User::class);
    }
    public  function videos(){
        return hasManyThrough(Video::class, User::class);
    }
}
