<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserArticleController;
use App\Http\Controllers\PublicHomeController;
use App\Http\Controllers\PublicArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [PublicHomeController::class, 'home'])->name('public.home');
    Route::get('/article', [PublicArticleController::class, 'list'])->name('public.article.list');
    Route::get('/article/detail/{id}', [PublicArticleController::class, 'detail'])->name('public.article.detail');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/admin/kategori/list', [AdminKategoriController::class, 'list'])->name('admin.kategori.list');

    Route::post('/admin/tag/list', [AdminTagController::class, 'list'])->name('admin.tag.list');

    Route::post('/admin/article/create', [AdminArticleController::class, 'create'])->name('admin.article.create');
    Route::get('/admin/article/detail/{id}', [AdminArticleController::class, 'detail'])->name('admin.article.detail');
    Route::get('/admin/article/publish', [AdminArticleController::class, 'publish'])->name('admin.article.publish');
    Route::get('/admin/article/draft', [AdminArticleController::class, 'draft'])->name('admin.article.draft');
});

Route::middleware(['auth', 'role:user|admin'])->group(function () {
    Route::get('/home', [UserHomeController::class, 'home'])->name('user.home');

    Route::get('/article/list', [UserArticleController::class, 'list'])->name('user.article.list');
    Route::get('/article/detail/{id}', [UserArticleController::class, 'detail'])->name('user.article.detail');
});

require __DIR__.'/auth.php';
