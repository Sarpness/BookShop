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

Route::get('/', [\App\Http\Controllers\BookController::class, 'bookList']
)->name('home');

Route::get('your_books', function (){
    return view('userBooks');
})->name('userBooks');

Route::get(
    '/contact/all/{id}',
    [\App\Http\Controllers\BookController::class, 'currentBook']
)->name('currentBook');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
