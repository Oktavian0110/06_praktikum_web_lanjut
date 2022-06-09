<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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
// ********************************************************
/* LATIHAN PERCOBAAN

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hello', function() {
  //  return 'Hello Word';
//});

Route::get('/hello', [WelcomeController::class,'hello']);

//Route::get('/hello', 'WelcomeController@hello');

Route::resource('photos', PhotoController::class);

********************************************************/
// ********************************************************
/* PRAKTIKUM 1

route::get('/', function() {
    return 'Selamat Datang';
});

route::get('/about', function() {
    echo 'Nama : Deki Firmansyah';
    echo '<br>NIM : 2041720113';
    echo '<br>Kelas : TI 2H';
});

route::get('/articles/{id}', function($id) {
    return 'Ini adalah halaman artikel dengan ID: '.$id;
});
 ********************************************************/
/* Praktikum 2

Route::get('/index', HomeController::class);

Route::get('/about', AboutController::class);

Route::get('/articles/{id}', ArticleController::class);

********************************************************/
// Praktikum 3

//Route::get('/index', function() {
  //  return view('praktikum3/index');
//});

Route::group(['prefix' => 'wisata'], function(){
    Route::get('/pantai', 'WisataController@pantai');
    Route::get('/pegunungan', 'WisataController@pegunungan');
    Route::get('/hutan', 'WisataController@hutan');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PastaController::class, 'pasta']);

Route::get('/menu', [App\Http\Controllers\PastaController::class, 'menu']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articles', ArticleController::class);

Route::get('/article/cetak_pdf', [ArticleController::class,'cetak_pdf'])->name('cetak_pdf');
