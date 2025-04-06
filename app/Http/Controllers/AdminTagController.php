<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;

class AdminTagController extends Controller
{
    public function list()
    {
        return view('admin.tag.list');
    }

    public function store(Request $request)
    {
        // dd($request->toArray());

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:50',
        ]);

        Tags::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('admin.kategori.list');
    }
}
