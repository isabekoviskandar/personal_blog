<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;


    protected $fillable = 
    [
        'post_id',
        'user_id',
        'is_like',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

public function user()
    {
        return $this->belongsTo(User::class);
    }
}
