<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicArticleController extends Controller
{
    public function list()
    {
        return view('public.article.list');
    }

    public function detail($id)
    {
        $article = Article::with('kategori', 'tag')
            ->where('id', $id)
            ->first();

        return view('public.article.detail', compact('article'));
    }
}
