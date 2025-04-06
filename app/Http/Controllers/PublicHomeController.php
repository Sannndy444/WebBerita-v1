<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class PublicHomeController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('user')) {
                return redirect()->route('user.home');
            }
        }

        $old = Article::with('kategori', 'tag')
            ->where('status', 'published')
            ->oldest()
            ->paginate(12);

        $article = Article::with('kategori', 'tag')
            ->where('status', 'published')
            ->latest()
            ->paginate(3);

        $randomArticle = Article::inRandomOrder()->first();

        return view('public.home', compact('article', 'old', 'randomArticle'));
    }
}
