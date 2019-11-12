<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public  function location() 
    {
        return hasOne(Location::class);
    }
}
