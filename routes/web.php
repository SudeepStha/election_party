<?php

use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\InterviewController;
use App\Http\Controllers\Backend\PersonaldetailController;
use App\Http\Controllers\Backend\RachanaController;
use App\Http\Controllers\Backend\VideoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('personaldetail', PersonaldetailController::class);

Route::resource('gallery', GalleryController::class);
Route::resource('interview', InterviewController::class);
Route::resource('rachana', RachanaController::class);
Route::resource('video', VideoController::class);
