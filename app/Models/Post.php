<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

//    by default laravel consider the table name is same like class name (Post => table = posts )
    protected $fillable = ['title', 'author', 'body'];

        public function comments(): HasMany
        {
            return $this->hasMany(Comment::class);
        }
}
