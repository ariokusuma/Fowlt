<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/aboutus', function () {
        return view('aboutus');
    });

    Route::get('/theteams', function () {
    return view('theteams');
    });

    Route::get('/test', function () {
    return view('test');
    });

    Route::get('/artikel', function () {
    return view('artikel');
    });

    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/footer', function () {
        return view('footer');
    });

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
