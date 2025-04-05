<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserArticleController extends Controller
{
    public function list()
    {
        return view('user.article.list');
    }

    public function detail()
    {
        return view('user.article.detail');
    }
}
