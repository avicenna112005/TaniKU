<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;

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


Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');


Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register/post', [LoginController::class, 'register_action'])->name('register.action');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin']], function() {
    Route::get('/dashboard', function () {
    return view('halaman.dashboard');
    });

    route::get('/halamansatu','BerandaController@halamansatu')->name('halamansatu');
});

Route::group(['middleware' => ['auth','ceklevel:user']], function() {

    route::get('/halamansatu','BerandaController@halamansatu')->name('halamansatu');
});

Route::get('/', function () {
    return view('halaman.index');
});



// Route::post('/postlogi',[Login])

// Route::get('/index', 'BerandaController@halamansatu')->name('halaman-satu');
// Route::get('/dashboard', 'BerandaController@halamandua')->name('halaman-dua');