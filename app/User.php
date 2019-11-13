<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Egulias\EmailValidator\Warning\Comment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public  function level() 
    {
        return belongsTo(Level::class);
    }

   
    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
    public  function location() //singular porque un usuario solo tiene una localizacion 
    {
        return hasOneThrough(Location::class, Propile::class);
    }
    public  function posts() //un usuario tiene nuchos posts
    {
        return hasMany(Post::class);
    }
    public  function videos() //un usuario tiene nuchos videos
    {
        return hasMany(Video::class);
    }
    public  function comments() //un usuario tiene nuchos comentarios
    {
        return hasMany(Comment::class);
    }
    public function image(){

        return $this->morphOne(Image::class, 'imageable');
        
    }
}
