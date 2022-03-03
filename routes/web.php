<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index']);
Route::prefix('produk') -> group(function(){
    Route::get('/eduGames', [ProdukController::class, 'eduGames']);
    Route::get('/kidsGames', [ProdukController::class, 'kidsGames']);
    Route::get('/story', [ProdukController::class, 'story']);
    Route::get('/songs', [ProdukController::class, 'songs']);
});

Route::get('/news/{judul}', function($judul){
    echo '<center> <h2> Halaman Berita <br> 
           <a href="https://www.educastudio.com/news">Klik Disini </a>'.'Untuk Melanjutkan Ke Halaman Berita
           <br> <h3> Judul Berita : '.$judul.'
           <br> <h4> <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Klik Disini </a>'.'Untuk Melanjutkan Ke Halaman '.$judul;
});

Route::prefix('program') -> group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

Route::get('/about', function (){
    echo '<center> <h2> About Us <br>
        <a href="https://www.educastudio.com/about-us">Klik Disini </a>Untuk Menampilkan Halaman About Us';
});

Route::resource('contact', ContactController::class) ->only (['index']);
