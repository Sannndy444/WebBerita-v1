<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class AdminKategoriController extends Controller
{
    public function list()
    {
        $kategori = Kategori::all();

        return view('admin.kategori.list', compact('kategori'));
    }

    public function store(Request $request)
    {
        // dd($request->toArray());

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:50',
        ]);

        Kategori::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('admin.kategori.list');
    }

    public function destroy(Kategori $kategori)
    {
        try {
            $kategori->delete();
            return redirect()->route('admin.kategori.list');
        } catch (\Exception $e) {
            return redirect()->route('admin.candidate.index')
                ->with('error', 'Candidate delete error.');
        }
    }
}
