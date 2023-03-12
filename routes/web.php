<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [FrontendController::class, ('home')])->name('home');
route::get('/blogs/{cat_name}/{cat_id}', [FrontendController::class, ('cat_blog')])->name('cat.blogs');
route::get('/blogs', [FrontendController::class, ('blogs')])->name('blogs');
route::get('/blog/{cat_id}/{blog_id}', [FrontendController::class, ('blog')])->name('blog');
route::get('/blog/store', [CommentController::class, ('comment_store')])->name('comment');

Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/category/create', [CategoryController::class, ('create')])->name('category.add');
    route::get('/category/manage', [CategoryController::class, ('index')])->name('category.manage');
    route::post('/category/store', [CategoryController::class, ('store')])->name('category.store');
    route::get('/category/delete/{cat_id}', [CategoryController::class, ('delete')])->name('category.delete');
    route::get('/category/edit/{cat_id}', [CategoryController::class, ('edit')])->name('category.edit');
    route::post('/category/update/{cat_id}', [CategoryController::class, ('update')])->name('category.update');
    route::get('/category/status/{cat_id}', [CategoryController::class, ('status')])->name('category.status');

    route::get('/blog/create', [BlogController::class, ('create')])->name('blog.add');
    route::post('/blog/store', [BlogController::class, ('store')])->name('blog.store');
    route::get('/blog/manage', [BlogController::class, ('index')])->name('blog.manage');
    route::get('/blog/delete/{blog_id}', [BlogController::class, ('delete')])->name('blog.delete');
    route::get('/blog/edit/{blog_id}', [BlogController::class, ('edit')])->name('blog.edit');
    route::get('/blog/status/{blog_id}', [BlogController::class, ('status')])->name('blog.status');
    route::post('/blog/update/{blog_id}', [BlogController::class, ('update')])->name('blog.update');

    route::get('/comment/manage', [CommentController::class, ('index')])->name('comment.manage');
    route::get('/comment/delete/{com_id}', [CommentController::class, ('delete')])->name('comment.delete');

    Route::get('/user/create', [UserController::class, ('create')])->name('user.add');
    Route::post('/user/store', [UserController::class, ('store')])->name('user.store');
    Route::get('/user/manage', [UserController::class, ('manage')])->name('user.manage');
    Route::get('/user/delete/{user_id}', [UserController::class, ('delete')])->name('user.delete');
    Route::get('/user/edit/{user_id}', [UserController::class, ('edit')])->name('user.edit');
    Route::post('/user/update/{user_id}', [UserController::class, ('update')])->name('user.update');
});

require __DIR__ . '/auth.php';
