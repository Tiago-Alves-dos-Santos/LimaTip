<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
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

//home pages
Route::get('/', [Home::class, 'index'])->name('index');

//admin pages
Route::group( [ 'prefix' => 'admin/' ], function()
{
    //pagina de login admin
    Route::get('/', [Home::class, 'login'])->name('login');

    //login e logout
    Route::post('/login', [Login::class, 'login'])->name('controller.login');
    Route::get('/logout', [Login::class, 'logout'])->name('controller.logout');

    //paginas de acesso apos login
    Route::group( ['middleware' => 'login'], function()
    {
        Route::get('/home', function () {
            return view('admin.home');
        })->name('view.admin.home');

        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('view.admin.profile');
    });
});

