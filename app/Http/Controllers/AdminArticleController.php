<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    public function list()
    {
        return view('admin.article.list');
    }
}
