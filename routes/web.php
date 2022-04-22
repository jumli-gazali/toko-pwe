<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerKedua;
use App\Http\Controllers\ControllerKeenam;
use App\Http\Controllers\ControllerKelima;
use App\Http\Controllers\ControllerKetiga;
use App\Http\Controllers\ControllerKeempat;
use App\Http\Controllers\ControllerKetujuh;
use App\Http\Controllers\ControllerPertama;
use App\Http\Controllers\ControllerKedelapan;
use App\Http\Controllers\ControllerKesepuluh;
use App\Http\Controllers\ControllerKesembilan;



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


Route::get('/nama-lengkap', function () {
    echo 'Nama : M. Jumli Gazali';
});

Route::get('/npm', function () {
    echo 'NPM : G1A020005';
});

Route::get('/kelas', function () {
    echo 'Kelas : A';
});

Route::get('/fakultas', function () {
    echo 'Fakultas : Teknik';
});

Route::get('/prodi', function () {
    echo 'Profi : Informatika';
});

Route::get('/universitas', function () {
    echo 'Universitas : Universitas Bengkulu';
});

Route::get('/tanggal-lahir', function () {
    echo 'Tanggal Lahir : 26 Oktober 2001';
});

Route::get('/alamat', function () {
    echo 'Alamat : Perumnas Pintu Langit';
});

Route::get('/hobi', function () {
    echo 'Hobi : Game';
});

Route::get('/asal', function () {
    echo 'Asal : Bengkulu Selatan';
});
 
Route::get('/coba-pertama', [ControllerPertama::class, 'index']);

Route::get('/coba-kedua', [ControllerKedua::class, 'index']);

Route::get('/coba-ketiga', [ControllerKetiga::class, 'index']);

Route::get('/coba-keempat', [ControllerKeempat::class, 'index']);

Route::get('/coba-kelima', [ControllerKelima::class, 'index']);

Route::get('/coba-keenam', [ControllerKeenam::class, 'index']);

Route::get('/coba-ketujuh', [ControllerKetujuh::class, 'index']);

Route::get('/coba-kedelapan', [ControllerKedelapan::class, 'index']);

Route::get('/coba-kesembilan', [ControllerKesembilan::class, 'index']);

Route::get('/coba-kesepuluh', [ControllerKesepuluh::class, 'index']);