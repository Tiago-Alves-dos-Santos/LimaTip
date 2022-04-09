<?php

use App\Http\Controllers\Home;
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

Route::get('/', [Home::class, 'index'])->name('index');

Route::get('/admin', function () {
    return view('admin.auth.login');
});


Route::get('/admin/home', function () {
    return view('admin.home');
})->name('view.admin.home');
Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('view.admin.profile');
