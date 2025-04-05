<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTagController extends Controller
{
    public function list()
    {
        return view('admin.tag.list');
    }
}
