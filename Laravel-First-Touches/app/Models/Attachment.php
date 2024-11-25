<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'file_path'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
