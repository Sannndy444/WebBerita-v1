<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    public function home()
    {
        return view('public.home');
    }
}
