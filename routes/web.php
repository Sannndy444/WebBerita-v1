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
    Route::get('/article/{id}', [PublicArticleController::class, 'detail'])->name('public.article.detail');
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

    Route::get('/admin/kategori/list', [AdminKategoriController::class, 'list'])->name('admin.kategori.list');
    Route::post('/admin/kategori/store', [AdminKategoriController::class, 'store'])->name('admin.kategori.store');
    Route::delete('/admin/kategori/delete/{kategori}', [AdminKategoriController::class, 'destroy'])->name('admin.kategori.destroy');

    Route::get('/admin/tag/list', [AdminTagController::class, 'list'])->name('admin.tag.list');
    Route::post('/admin/tag/store', [AdminTagController::class, 'store'])->name('admin.tag.store');
    Route::delete('/admin/tag/delete/{tags}', [AdminTagController::class, 'destroy'])->name('admin.tag.destroy');

    Route::get('/admin/article/create', [AdminArticleController::class, 'create'])->name('admin.article.create');
    Route::get('/admin/article/detail/{id}', [AdminArticleController::class, 'detail'])->name('admin.article.detail');
    Route::get('/admin/article/publish', [AdminArticleController::class, 'publish'])->name('admin.article.publish');
    Route::get('/admin/article/draft', [AdminArticleController::class, 'draft'])->name('admin.article.draft');
    Route::post('/admin/article/store', [AdminArticleController::class, 'store'])->name('admin.article.store');
    Route::get('/admin/article/update/{id}', [AdminArticleController::class, 'updateStatus'])->name('admin.article.status');
    Route::delete('/admin/article/delete/{article}', [AdminArticleController::class, 'destroy'])->name('admin.article.destroy');
});

require __DIR__.'/auth.php';
