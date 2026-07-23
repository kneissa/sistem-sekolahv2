<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('students.')->prefix('students')->group(function() {
//Halaman daftar siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

//Halaman detail siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

//Halaman tambah siswa
    Route::get('/create', [StudentController::class, 'create'])->name('create');

//Halaman edit siswa
    Route::get('/{id}/edit', [StudentController::class, 'show'])->name('edit');

//Logika Tambah siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

//Logika Edit siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

//Logika Hapus siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');    
});

