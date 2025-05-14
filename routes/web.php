<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/products/new', 'addProduct');

Route::post('/products/added', [\App\Http\Controllers\ProductsController::class, 'newProduct'])
    ->name('products.added');


Route::view('/products/search', 'welcome');
Route::get('/products/search-results', [\App\Http\Controllers\ProductsController::class, 'searchResults'])
    ->name('products.search');
Route::get('products/singleProduct/{productId}', [\App\Http\Controllers\ProductsController::class, 'singleProduct'])
    ->name('products.singleProduct');
Route::post('/cart/overview', [\App\Http\Controllers\ShoppingCartController::class, 'addProductToCart'])
    ->name('cart.add');

require __DIR__.'/auth.php';



