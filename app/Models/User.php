<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    //フォローする
    public function follow(Int $user_id)
    {
        return $this->follows()->attach($user_id);
    }

    //フォロー解除
    public function unfollow(Int $user_id)
    {
        return $this->follows()->detach($user_id);
    }

    //フォローしてるか
    public function isFollowing(Int $user_id)
    {
        return (boolean) $this->follows()->where('followed_id', $user_id)->first(['follows.id']);
    }

    //フォローされてるか
    public function isFollowed(Int $user_id)
    {
        return (boolean) $this->follows()->where('following_id', $user_id)->first(['follows.id']);
    }


    public function post(){
        return $this->hasMany('App\Models\Post');
    }

    public function followUsers(){
        return $this->belongsToMany(User::class, 'follows', 'followed_id', 'following_id');
    }

    public function follows(){
        return $this->belongsToMany(User::class, 'follows', 'following_id', 'followed_id');
    }
}
