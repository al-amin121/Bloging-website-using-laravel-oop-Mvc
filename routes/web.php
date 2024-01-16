<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/', function () {return view('welcome');});
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/detail/{id}',[HomeController::class,'blogDetail'])->name('blog.detail');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/admin', [AdminController::class,'dashboard'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class,'addCategory'])->name('category.add');
    Route::post('/store-category', [CategoryController::class,'saveCategory'])->name('category.store');

    Route::get('/manage-category', [CategoryController::class,'manageCategory'])->name('category.manage');
    Route::get('/category-status-{id}', [CategoryController::class,'statusCategory'])->name('category.status');
    Route::get('/category-edit-{id}', [CategoryController::class,'editCategory'])->name('category.edit');

    Route::post('/category-update', [CategoryController::class,'updateCategory'])->name('category.update');
    Route::post('/category-delete', [CategoryController::class,'deleteCategory'])->name('category.delete');

    Route::get('/add-blog', [BlogController::class,'addBlog'])->name('blog.add');
    Route::post('/store-blog', [BlogController::class,'saveBlog'])->name('blog.store');

    Route::get('/blog-edit-{id}', [BlogController::class,'editBlog'])->name('blog.edit');
    Route::post('/blog-update', [BlogController::class,'updateBlog'])->name('blog.update');

    Route::get('/manage-blog', [BlogController::class,'manageBlog'])->name('blog.manage');
    Route::get('/manage-blog-{id}', [BlogController::class,'statusBlog'])->name('blog.status');

    Route::post('/manage-delete', [BlogController::class,'deleteBlog'])->name('blog.delete');



});
