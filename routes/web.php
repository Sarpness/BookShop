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
Route::get('/home', [\App\Http\Controllers\BookController::class, 'bookList']
)->name('home');

Route::get('/', [\App\Http\Controllers\BookController::class, 'bookList']
)->name('home');

Route::get('your_books',
    [\App\Http\Controllers\ShoppingCartController::class, 'userBooks']
)->name('userBooks');

Route::get(
    '/contact/all/{id}',
    [\App\Http\Controllers\BookController::class, 'currentBook']
)->name('currentBook');

Route::post(
    '/contact/addBook',
    [\App\Http\Controllers\ShoppingCartController::class, 'addBook']
)->name('addBook');
Route::get(
    '/contact/deleteBook',
    [\App\Http\Controllers\ShoppingCartController::class, 'deleteBook']
)->name('deleteBook');

require __DIR__.'/auth.php';

Route::get('profile',
    [\App\Http\Controllers\UserProfileController::class, 'profile']
)->name('profile');

Route::get('profile/editProfile',
    [\App\Http\Controllers\UserProfileController::class, 'editProfile']
)->name('editProfile');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
