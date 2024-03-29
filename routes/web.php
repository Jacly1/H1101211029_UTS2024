<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\GajiController;
use app\Http\Controllers\JabatanController;
use App\Http\Controllers\MainController;





Route::get('/', function () {
    return view('main');
});


// Route::get('/gaji', 'GajiController@index')->name('gaji');

// Route::get('/gaji', [GajiController::class, 'index'])->name('gaji.index');

// Route::get('/jabatan', 'JabatanController@index')->name('jabatan.index');

// Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');


// Route::get('/gaji', function () {
//     return view('gaji');
// });

// Route::get('/presensi', function () {
//     return view('presensi');
// });

// Route::get('/jabatan', function () {
//     return view('jabatan');
// });

Route::get('/jabatan', [MainController::class, 'view_jabatan']);
Route::get('/gaji', [MainController::class, 'view_gaji']);
Route::get('/presensi', [MainController::class, 'view_presensi']);