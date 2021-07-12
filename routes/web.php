<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('Acceuil');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('Acceuil');

Route::get('/categoryList', [App\Http\Controllers\CategoryController::class, 'categoryList'])->name('categoryList');


Route::get('/post.create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post.store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post.mesposts', [App\Http\Controllers\PostController::class, 'mesposts'])->name('post.mesposts');
Route::get('/postedit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::get('/postsearch', [App\Http\Controllers\PostController::class, 'search'])->name('post.search');
Route::get('/postfiltre', [App\Http\Controllers\PostController::class, 'filtre'])->name('post.filtre');

Route::put('/postupdate/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('/post.destroy/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');


Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
    Route::get('/userlist', [App\Http\Controllers\HomeController::class, 'userlist'])->name('userlist');
    Route::get('/useredit/{user}', [App\Http\Controllers\HomeController::class, 'useredit'])->name('useredit');
    Route::put('/userupdate/{user}', [App\Http\Controllers\HomeController::class, 'userupdate'])->name('userupdate');
    Route::delete('/userdestroy/{user}', [App\Http\Controllers\HomeController::class, 'userdestroy'])->name('userdestroy');

/*
|--------------------------------------------------------------------------
*/
Route::get('/catcreate', [App\Http\Controllers\CategoryController::class, 'create'])->name('catcreate');
Route::post('/catstore', [App\Http\Controllers\CategoryController::class, 'store'])->name('catstore');
Route::get('/catedit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('catedit');
Route::put('/catupdate/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('catupdate');
Route::delete('/catdestroy/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('catdestroy');

});
