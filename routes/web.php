<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
    Route::post('/admin/kategori/create', [AdminKategoriController::class, 'create'])->name('admin.kategori.create');

    Route::get('/admin/tag/list', [AdminTagController::class, 'list'])->name('admin.tag.list');
    Route::post('/admin/tag/create', [AdminTagController::class, 'create'])->name('admin.tag.create');

    Route::get('/admin/article/list', [AdminArticleController::class, 'list'])->name('admin.article.list');
    Route::get('/admin/article/create', [AdminArticleController::class, 'create'])->name('admin.article.create');
    Route::get('/admin/article/detail/{id}', [AdminArticleController::class, 'detail'])->name('admin.article.detail');

    Route::get('/admin/user/list', [AdminUserController::class, 'list'])->name('admin.user');
});

Route::middleware(['auth', 'role:user|admin'])->group(function () {
    Route::get('/home', [UserHomeController::class, 'home'])->name('user.home');

    Route::get('/article/list', [UserArticleController::class, 'list'])->name('user.article.list');
    Route::get('/article/detail/{id}', [UserArticleController::class, 'detail'])->name('user.article.detail');
});

require __DIR__.'/auth.php';
