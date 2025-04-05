<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    public function list()
    {
        return view('admin.kategori.list');
    }
}
