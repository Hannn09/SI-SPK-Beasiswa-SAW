<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\TanggunganController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MahasiswaMiddleware;

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

// Route Login 
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');

// Route Register
Route::get('/register', [AuthController::class, 'showRegistration'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.auth');

//Route Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Login Admin
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin');

    // Route Kriteria Admin
    Route::get('/admin/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
    Route::get('/admin/kriteria-entry', [KriteriaController::class, 'showCriteriaEntry'])->name('kriteria-entry');
    Route::post('/admin/kriteria-entry', [KriteriaController::class, 'store'])->name('kriteria-store');
    Route::post('/admin/kriteria-entry/{id}', [KriteriaController::class, 'update'])->name('kriteria-update');
    Route::get('/admin/kriteria-delete/{id}', [KriteriaController::class, 'destroy'])->name('kriteria-delete');

    // Route Pendapatan Ortu
    Route::get('/admin/pendapatan', [IncomeController::class, 'index'])->name('pendapatan');
    Route::get('/admin/pendapatan-entry', [IncomeController::class, 'showPendapatanEntry'])->name('pendapatan-entry');
    Route::post('/admin/pendapatan-entry', [IncomeController::class, 'store'])->name('pendapatan-store');
    Route::post('/admin/pendapatan-update/{id}', [IncomeController::class, 'update'])->name('pendapatan-update');
    Route::get('/admin/pendapatan-delete/{id}', [IncomeController::class, 'destroy'])->name('pendapatan-delete');

    // Route Pendidikan Ortu
    Route::get('/admin/pendidikan', [EducationController::class, 'index'])->name('pendidikan');
    Route::get('/admin/pendidikan-entry', [EducationController::class, 'create'])->name('pendidikan-entry');
    Route::post('/admin/pendidikan-entry', [EducationController::class, 'store'])->name('pendidikan-store');
    Route::post('/admin/pendidikan-update/{id}', [EducationController::class, 'update'])->name('pendidikan-update');
    Route::get('/admin/pendidikan-delete/{id}', [EducationController::class, 'destroy'])->name('pendidikan-delete');

    // Route Tanggungan
    Route::get('/admin/tanggungan', [TanggunganController::class, 'index'])->name('tanggungan');
    Route::get('/admin/tanggungan-entry', [TanggunganController::class, 'create'])->name('tanggungan-entry');
    Route::post('/admin/tanggungan-entry', [TanggunganController::class, 'store'])->name('tanggungan-store');
    Route::post('/admin/tanggungan-update/{id}', [TanggunganController::class, 'update'])->name('tanggungan-update');
    Route::get('/admin/tanggungan-delete/{id}', [TanggunganController::class, 'destroy'])->name('tanggungan-delete');

    // Route Penilaian
    Route::get('/admin/penilaian', [PenilaianController::class, 'index'])->name('penilaian');
    Route::get('/admin/penilaian-entry', [PenilaianController::class, 'create'])->name('penilaian-entry');
    Route::post('/admin/penilaian-store', [PenilaianController::class, 'store'])->name('penilaian-store');

    //Route Rank
    Route::get('/admin/rank', [RankController::class, 'index'])->name('rank');

    // Route Data Mahasiswa
    Route::get('/admin/data-alternatif', [AlternatifController::class, 'show'])->name('data.alternatif');
    Route::get('/admin/data-berkas', [FileController::class, 'show'])->name('data.file');
    Route::get('/admin/data-ortu', [OrtuController::class, 'show'])->name('data.ortu');

    // Route Data Mahasiswa
    Route::get('/admin/data-mahasiswa', [MahasiswaController::class, 'showData'])->name('data.mhs');

    // Route Export PDF
    Route::get('/report/alternatif', [AlternatifController::class, 'exportpdf'])->name('report-pdf');
    Route::get('/report/ortu', [OrtuController::class, 'exportpdf'])->name('report-pdf-ortu');
    Route::get('/report/penilaian', [PenilaianController::class, 'exportpdf'])->name('report-pdf-penilaian');
    Route::get('/report/ranking', [RankController::class, 'exportpdf'])->name('report-pdf-ranking');
    Route::get('/report/mahasiswa', [MahasiswaController::class, 'exportpdf'])->name('report-pdf-mahasiswa');
});

// Route Login Mahasiswa
Route::middleware([MahasiswaMiddleware::class])->group(function () {
    // Route Dashboard Mahasiswa
    Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'index'])->name('mahasiswa');

    //Route Entry Alternatif Mahasiswa
    Route::get('/mahasiswa/entry-alternatif', [AlternatifController::class, 'index'])->name('alternatif');
    Route::post('/mahasiswa/entry-alternatif', [AlternatifController::class, 'store'])->name('alternatif-entry');

    // Route File Mahasiswa
    Route::get('/mahasiswa/file-entry', [FileController::class, 'index'])->name('file');
    Route::post('/mahasiswa/file-entry', [FileController::class, 'store'])->name('file-entry');

    // Route Ortu
    Route::get('/mahasiswa/parents-entry', [OrtuController::class, 'index'])->name('parent');
    Route::post('/mahasiswa/parents-entry', [OrtuController::class, 'store'])->name('parent-entry');
});
