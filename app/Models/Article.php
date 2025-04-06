<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title', 'slug', 'image', 'content', 'kategori_id', 'tag_id', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tags::class, 'article_tags', 'article_id', 'tag_id');
    }
}
