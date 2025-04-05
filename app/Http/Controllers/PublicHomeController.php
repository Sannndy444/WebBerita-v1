<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicHomeController extends Controller
{
    public function home()
    {
        $checkUser = Auth::user();

        return view('public.home', compact('checkUser'));
    }
}
