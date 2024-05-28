<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Post_tagController;
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

Route::get('/', [IndexController::class, 'welcome'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/course', [IndexController::class, 'course'])->name('course');
Route::get('/feature', [IndexController::class, 'feature'])->name('feature');
Route::get('/detail', [IndexController::class, 'detail'])->name('detail');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

Route::get('/message', [MessageController::class, 'store'])->name('recieve');


//admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/createfile', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/storefile', [AdminController::class, 'store'])->name('admin.storefile');
Route::get('/admin/showpic', [AdminController::class, 'showpic'])->name('admin.showpic');
Route::get('/showmessages', [MessageController::class, 'show'])->name('infoshow');
Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('edit');
Route::delete('/delete/{id}', [MessageController::class, 'delete'])->name('delete');
Route::post('/update/{id}', [MessageController::class, 'update'])->name('update');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('post', PostController::class);
Route::resource('tag', TagController::class);
Route::resource('post_tag', Post_tagController::class);




// Route::get('/index', [IndexController::class, 'index']);
// Route::get('/news', [NewsController::class, 'index']);
// Route::get('/contact', [IndexController::class,'contact']);

// Route::get('/mail', [NewsController::class, 'mail']);
// Route::get('/newsdetail/{id}', [NewsController::class, 'newsdetail']);



