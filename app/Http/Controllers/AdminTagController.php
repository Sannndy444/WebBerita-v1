<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;

class AdminTagController extends Controller
{
    public function list()
    {
        $tag = Tags::all();

        return view('admin.tag.list', compact('tag'));
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

        return redirect()->route('admin.tag.list');
    }

    public function destroy(Tags $tags)
    {
        try {
            $tags->delete();
            return redirect()->route('admin.tag.list');
        } catch (\Exception $e) {
            return redirect()->route('admin.tag.list')
                ->with('error', 'error');
        }
    }
}
