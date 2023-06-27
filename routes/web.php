<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('user')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', 'index')->name('users');
        Route::get('add', 'create')->name('user.add');
        Route::post('store', 'store')->name('user.store');
        Route::get('edit/{user}', 'edit')->name('user.edit');
        Route::post('update/{user}', 'update')->name('user.update');
        Route::get('destroy/{user}', 'destroy')->name('user.destroy');
    });
