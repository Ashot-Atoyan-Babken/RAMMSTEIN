<?php

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
Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::get('/admin', \App\Http\Controllers\Admin\Main\IndexController::class)->name('admin');
//albums
Route::get('/album', \App\Http\Controllers\Admin\Album\IndexController::class)->name('album');
Route::get('/album/create', \App\Http\Controllers\Admin\Album\CreateController::class)->name('album.create');
Route::post('/album', \App\Http\Controllers\Admin\Album\StoreController::class)->name('album.store');
Route::get('/album/{album}/edit', \App\Http\Controllers\Admin\Album\EditController::class)->name('album.edit');
Route::patch('/album/{album}', \App\Http\Controllers\Admin\Album\UpdateController::class)->name('album.update');
Route::delete('/album/{album}', \App\Http\Controllers\Admin\Album\DeleteController::class)->name('album.destroy');

//song
Route::get('/song', \App\Http\Controllers\Admin\Song\IndexController::class)->name('song');
Route::get('/song/create', \App\Http\Controllers\Admin\Song\CreateController::class)->name('song.create');
Route::post('/song', \App\Http\Controllers\Admin\Song\StoreController::class)->name('song.store');
Route::get('/song/{song}/edit', \App\Http\Controllers\Admin\Song\EditController::class)->name('song.edit');
Route::patch('/song/{song}', \App\Http\Controllers\Admin\Song\UpdateController::class)->name('song.update');
Route::delete('/song/{song}', \App\Http\Controllers\Admin\Song\DeleteController::class)->name('song.destroy');


Route::get('/login', \App\Http\Controllers\Auth\LoginController::class)->name('login');
