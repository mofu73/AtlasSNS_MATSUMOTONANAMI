<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post',
        'user_id',
        'created_at',
        'updated_at',
    ];

    //リレーション
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
