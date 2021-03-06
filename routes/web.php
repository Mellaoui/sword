<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/services', function(){
    return view('services');  
});

Route::get('/transport', function(){
    return view('transport');  
});

Route::get('/', [HomeController::class,'index']);
Route::get('/blog', [BlogController::class,'index']);
Route::get('/{id}', [HomeController::class,'show'])->name('presentation.show');
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class,'show'])->name('blog.show');
