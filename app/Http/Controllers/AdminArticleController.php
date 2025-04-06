<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\article_tags;
use Illuminate\Support\Facades\Auth;

class AdminArticleController extends Controller
{
    public function list()
    {
        return view('admin.article.list');
    }

    public function detail()
    {
        return view('admin.article.detail');
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:55',
            'kategori_id' => 'required|exists:kategoris,id',
            'tag_id' => 'required|exists:tags,id',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:6000',
            'content' => 'required|string|max:5000',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('image', $imagePath, 'public');
        }

        $article = Article::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'kategori_id' => $request->kategori_id,
            'image' => $imagePath,
            'content' => $request->content,
            'user_id' => $user->id,
        ]);

        article_tags::create([
            'article_id' => $article->id,
            'tag_id' => $request->tag_id,
        ]);

        return redirect()->route('admin.kategori.list');
    }

    public function publish()
    {
        return view('admin.article.publish');
    }

    public function draft()
    {
        return view('admin.article.draft');
    }
}
