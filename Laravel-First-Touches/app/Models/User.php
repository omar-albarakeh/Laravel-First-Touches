<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'email', 'password'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function articles()
    {
        return $this->hasManyThrough(Article::class, News::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
