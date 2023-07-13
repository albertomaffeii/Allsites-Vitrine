<?php

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

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;

Route::get('/', [HomeController::class, '__invoke'])->name('site.home');

Route::get('/products', [CategoryController::class, 'index'])->name('site.products');
Route::get('/products/{category:slug}', [CategoryController::class, 'show'])->name('site.products.category');

Route::get('/blog', [BlogController::class, '__invoke'])->name('site.blog');

Route::view('/about', view:'site.about.index')->name('site.about'); //Static page

Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('site.contact.store');


?>