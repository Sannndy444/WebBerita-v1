<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicArticleController extends Controller
{
    public function list()
    {
        return view('public.article.list');
    }

    public function detail()
    {
        return view('public.article.detail');
    }
}
