<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;


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


Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dosen', function () {
    $dsn = [
        'Prasetya Jaka M.Kom',
        'Dedi Sutisna M.Pd',
        'Retno Wullandari M.Pd',
        'Eka Ayuningtyas M.Kom',
        'Sampurna Totong M.Ag',
        'Reynaldi M.Kom',
        'Riyan Baskara M.Kom',
        'Muhammad Alif M.Pd',
        'Maman Suherman M.Kom',
        'Muslihat M.Pd',
        ];
        return view('dosen')->with('dosen',$dsn);
});

Route::get('/mahasiswa', function () {
    $mhs = [
        'Jaka Prasetya',
        'Agis Tajla',
        'Dimas Dewanto',
        'Muhammad Fiqri',
        'Maulana Zakki',
        'Yumna Dwi',
        'Vonny Aulia Putri',
        'Rahadian',
        'Aksal Anggara',
        'Rifqi Fadhillaah',
        ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});

Route::get('/matakuliah', function () {
    $mk = [
        'Pemrograman Mobile',
        'Pancasila',
        'Budaya Bangsa',
        'Embedded System',
        'Pendidikan Agama Islam',
        'Framework',
        'Cloud Computing',
        'Bahasa Inggris',
        'Jaringan Komputer',
        'Kalkulus',
        ];
    return view('matkul')->with('matkul',$mk);;
});
