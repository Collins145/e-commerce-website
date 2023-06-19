<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/', [SiteController::class, 'index'])->name('shop');
Route::get('about', [SiteController::class, 'about'])->name('about');
Route::get('footer', [SiteController::class, 'footer'])->name('footer');
Route::get('FAQs', [SiteController::class, 'FAQs'])->name('FAQs');
Route::get('contact', [SiteController::class, 'contact'])->name('contact');
Route::get('product', [SiteController::class, 'product'])->name('product');
Route::resource('categories', CategoriesController::class)->only(['index', 'show']);
Route::resource('products', ProductsController::class)->only(['index', 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
