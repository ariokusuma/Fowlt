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

    Route::get('/produkfowlt', function () {
        return view('produkfowlt');
    });

    Route::get('/belanja', function () {
        return view('belanja');
    });

    // Route::get('/theteams', function () {
    // return view('theteams');
    // });

    Route::get('/test', function () {
    return view('test');
    });

    Route::get('/artikel', function () {
    return view('artikel');
    });

    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/profile-edit', function () {
        return view('profile-edit');
    });

    Route::get('/footer', function () {
        return view('footer');
    });

    Route::get('/artikel1', function () {
        return view('artikel.artikel1');
    });

    Route::get('/produk1', function () {
        return view('produk.produk1');
    });


    Route::get('/produk2', function () {
        return view('produk.produk2');
    });

    Route::get('/produk3', function () {
        return view('produk.produk3');
    });

    Route::get('/belanja', function () {
        return view('belanja.belanja');
    });

    Route::get('/detailproduk', function () {
        return view('belanja.belanja-detail');
    });

    Route::get('/jualternak', function () {
        return view('belanja.belanja-tambah');
    });


Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('profile', [UserController::class, 'profile'])->name('profile');
Route::post('profil-edit', [UserController::class, 'profile_action'])->name('profile.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
