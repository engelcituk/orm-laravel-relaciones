<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public  function commentable() {

        return morpTo();
    }
    public  function user() {

        return belongsTo(User::class);
    }
}
