<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\about;
use App\Http\Controllers\treatment;
use App\Http\Controllers\contact;

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
    return view('welcome');
});



Route::get('ashu/', function () {
    return view('ashu');
});

Route::get('/about', [about::class, 'about'])->name('about');
Route::get('/treatment', [treatment::class, 'treatment'])->name('treatment');
Route::get('/contact', [contact::class, 'contact'])->name('contact');