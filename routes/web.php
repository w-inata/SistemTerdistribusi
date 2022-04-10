<?php

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



Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete.product');
    Route::get('setProfil/{id}', [App\Http\Controllers\UserController::class, 'getProfil'])->name('setProfil');
    Route::post('update-profile/{id}', [App\Http\Controllers\UserController::class, 'setProfil'])->name('update.profil');
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('rental', App\Http\Controllers\RentalController::class);
    Route::get('rental-kamera/{id}', [App\Http\Controllers\RentalController::class, 'getRental'])->name('rental');
    Route::get('testimonial/{id}', [App\Http\Controllers\TestimonialController::class, 'getTestimonial'])->name('testimonial');
    Route::post('testimonial/store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('lihat-testimonial/{id}', [App\Http\Controllers\TestimonialController::class, 'showTestimonial'])->name('lihat-testimonial');
    Route::get('testimonial/delete/{id}', [App\Http\Controllers\TestimonialController::class, 'delete'])->name('testimonial.delete');
});
