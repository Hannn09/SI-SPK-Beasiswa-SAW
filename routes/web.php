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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin', function () {
    return view('layouts/admin');
})->name('admin');

Route::get('/user', function () {
    return view('layouts/user');
})->name('user');

Route::get('/alternative', function () {
    return view('users/Alternatif/alternative');
})->name('alternative');

Route::get('/alternative-entry', function () {
    return view('users/Alternatif/alternative-entry');
})->name('alternative-entry');

Route::get('/file', function () {
    return view('users/Berkas/file');
})->name('file');

Route::get('/file-entry', function () {
    return view('users/Berkas/file-entry');
})->name('file-entry');

Route::get('/parent', function () {
    return view('users/Ortu/parents');
})->name('parent');

Route::get('/parent-entry', function () {
    return view('users/Ortu/parents-entry');
})->name('parent-entry');

