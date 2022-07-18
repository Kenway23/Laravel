<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BranchController;/*
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

Route::get('/welcome', function () {
    echo "<center>";
    echo "<u>Hello semuanya,apa kabar?</u><br>";
    echo "<u>Pada kali imi kita sedang belajar route basic</u>";
    echo "</center>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{hobby}', function ($nama,$umur,$alamat,$jenis_kelamin,$hobby) {
    return view('pages1.biodata',compact('nama','umur','alamat','jenis_kelamin','hobby'));
});

Route::get('/pesanan/{minuman?}', function ($minuman = "Kosong") {
    return view('pages1.pesanan',compact('minuman'));
});

Route::get('/material/{material?}/{material2?}', function ($material = "Kosong",$material2 = "Kosong") {
    return view('pages1.material',compact('material','material2'));
});

Route::get('/pengenalan',[App\Http\Controllers\PengenalanController::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}',[PengenalanController::class,'intro']);

Route::get('/siswa',[PengenalanController::class,'siswa']);

Route::get('/berita',[LatihanController::class,'berita']);

Route::get('/dosen',[LatihanController::class,'dosen']);

Route::get('/tv',[LatihanController::class,'tv']);

Route::get('/belanja',[LatihanController::class,'belanja']);

Route::get('/post',[PostController::class,'index']);

Route::get('/staffbranch',[StaffBranchController::class,'index']);

Route::get('/staff',[StaffController::class,'index']);

Route::get('/branch',[BranchController::class,'index']);