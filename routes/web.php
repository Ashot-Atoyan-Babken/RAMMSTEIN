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

//main
Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');
Route::get('/playlist', \App\Http\Controllers\Main\PlaylistController::class)->name('playlist');
Route::get('/pictures', \App\Http\Controllers\Main\PictureController::class)->name('pictures');
Route::get('/tours', \App\Http\Controllers\Main\TourController::class)->name('tours');
Route::get('/contacts', \App\Http\Controllers\Main\ContactController::class)->name('contacts');

//song
Route::prefix('album')->group(function () {
    Route::get('/song', \App\Http\Controllers\Song\SongController::class)->name('songs');
});


Route::prefix('tour')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Tour\IndexController::class)->name('tour');
    Route::get('/create', \App\Http\Controllers\Admin\Tour\CreateController::class)->name('tour.create');
    Route::post('/', \App\Http\Controllers\Admin\Tour\StoreController::class)->name('tour.store');
    Route::get('/{tour}/edit', \App\Http\Controllers\Admin\Tour\EditController::class)->name('tour.edit');
    Route::patch('/{tour}', \App\Http\Controllers\Admin\Tour\UpdateController::class)->name('tour.update');
    Route::delete('/{tour}', \App\Http\Controllers\Admin\Tour\DeleteController::class)->name('tour.destroy');
    Route::get('/concert', \App\Http\Controllers\Concert\ConcertController::class)->name('concerts');
});

Route::prefix('concerts')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Concert\IndexController::class)->name('concert');
    Route::get('/create', \App\Http\Controllers\Admin\Concert\CreateController::class)->name('concert.create');
    Route::post('/', \App\Http\Controllers\Admin\Concert\StoreController::class)->name('concert.store');
    Route::get('/{concert}/edit', \App\Http\Controllers\Admin\Concert\EditController::class)->name('concert.edit');
    Route::patch('/{concert}', \App\Http\Controllers\Admin\Concert\UpdateController::class)->name('concert.update');
    Route::delete('/{concert}', \App\Http\Controllers\Admin\Concert\DeleteController::class)->name('concert.destroy');
});
Route::prefix('pictures')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Picture\IndexController::class)->name('picture');
    Route::get('/create', \App\Http\Controllers\Admin\Picture\CreateController::class)->name('picture.create');
    Route::post('/', \App\Http\Controllers\Admin\Picture\StoreController::class)->name('picture.store');
    Route::get('/{picture}/edit', \App\Http\Controllers\Admin\Picture\EditController::class)->name('picture.edit');
    Route::patch('/{picture}', \App\Http\Controllers\Admin\Picture\UpdateController::class)->name('picture.update');
    Route::delete('/{picture}', \App\Http\Controllers\Admin\Picture\DeleteController::class)->name('picture.destroy');
    Route::get('/photos',\App\Http\Controllers\Photos\PhotosController::class)->name('photos');
});


//Route::get('/login', \App\Http\Controllers\Auth\LoginController::class)->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
