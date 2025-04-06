<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\article_tags;
use App\Models\Kategori;
use App\Models\Tags;
use Illuminate\Support\Facades\Auth;

class AdminArticleController extends Controller
{
    public function detail($id)
    {
        // dd($id);

        $article = Article::with('kategori', 'tag')
            ->where('id', $id)
            ->first();

        return view('admin.article.detail', compact('article'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tags::all();

        return view('admin.article.create', compact('kategori', 'tag'));
    }

    public function store(Request $request)
    {
        // dd($request->toArray());

        $user = Auth::user();

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:55',
            'kategori_id' => 'required|exists:kategoris,id',
            'tag_id' => 'required|exists:tags,id',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:6000',
            'content' => 'required|string|max:5000',
        ]);

        // dd($user);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('image', $imagePath, 'public');
        }

        // dd($imagePath);

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

        return redirect()->route('admin.article.create');
    }

    public function publish()
    {
        $article = Article::where('status', 'published')
            ->with('kategori', 'tag')
            ->get();

        return view('admin.article.publish', compact('article'));
    }

    public function draft()
    {
        $article = Article::where('status', 'draft')
            ->with('kategori', 'tag')
            ->get();

        return view('admin.article.draft', compact('article'));
    }

    public function updateStatus($id)
    {
        // dd($id);

        $article = Article::findOrFail($id);

        $article->update([
            'status' => 'published',
        ]);
        return redirect()->route('admin.article.draft');
    }

    public function destroy(Article $article)
    {
        try {
            $article->delete();
            return redirect()->route('admin.article.draft');
        } catch (\Exception $e) {
            return redirect()->route('admin.article.draft')
                ->with('error', 'eror');
        }
    }
}
