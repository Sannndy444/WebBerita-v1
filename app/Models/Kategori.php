<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = ['name', 'slug'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
