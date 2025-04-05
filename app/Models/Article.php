<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    protected $fillable = ['title', 'slug', 'image', 'content', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tags::class, 'article_tag', 'article_id', 'tag_id');
    }
}
