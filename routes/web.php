<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('blog')->name('blog.')->group(function(){
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('about', [BlogController::class, 'about'])->name('about');
    Route::get('contact', [BlogController::class, 'contact'])->name('contact');
    Route::get('post', [BlogController::class, 'post'])->name('post');
});
