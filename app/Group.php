<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public  function users() 
    {
        return belongsToMany(User::class)->withTimestamps();
    }
}
