<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;

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
//Auth
Auth::routes();
//Socialite
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/'); 
})->name('logout');

//Admin
Route::get('admin', [HomeController::class, 'admin'])->name('admin')->middleware('roleuser');

//Admin Wisata
Route::get('admin/wisata', [WisataController::class, 'index'])->name('admin.wisata')->middleware('roleuser');
Route::post('wisata/save', [WisataController::class, 'store'])->middleware('roleuser');
Route::get('wisata/edit/{id}', [WisataController::class, 'show'])->middleware('roleuser');
Route::post('wisata/update', [WisataController::class, 'update'])->middleware('roleuser');
Route::get('wisata/delete/{id}', [WisataController::class, 'destroy'])->middleware('roleuser');
Route::get('user/detailwisata/{id}', [WisataController::class, 'detail_wisata']);
//Admin Kategori
Route::get('admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori')->middleware('roleuser');
Route::post('kategori/save', [KategoriController::class, 'store'])->middleware('roleuser');
Route::get('kategori/edit/{id}', [KategoriController::class, 'show'])->middleware('roleuser');
Route::post('kategori/update', [KategoriController::class, 'update'])->middleware('roleuser');
Route::get('kategori/delete/{id}', [KategoriController::class, 'destroy'])->middleware('roleuser');
//Admin Review
Route::get('admin/review', [ReviewController::class, 'index'])->name('admin.review')->middleware('roleuser');
Route::post('review/send', [ReviewController::class, 'store']);
Route::get('review/delete/{id}', [ReviewController::class, 'destroy'])->middleware('roleuser');
//Admin Berita
Route::get('admin/berita', [BeritaController::class, 'index'])->name('admin.berita')->middleware('roleuser');
Route::post('berita/save', [BeritaController::class, 'store'])->middleware('roleuser');
Route::get('berita/edit/{id}', [BeritaController::class, 'show'])->middleware('roleuser');
Route::post('berita/update', [BeritaController::class, 'update'])->middleware('roleuser');
Route::get('berita/delete/{id}', [BeritaController::class, 'destroy'])->middleware('roleuser');
Route::get('user/blog', [BeritaController::class, 'blog']);
Route::get('blog/detail/{id}', [BeritaController::class, 'detailberita']);
//Admin Hotel
Route::get('admin/hotel', [HotelController::class, 'index'])->name('admin.hotel')->middleware('roleuser');
Route::post('hotel/save', [HotelController::class, 'store'])->middleware('roleuser');
Route::get('hotel/edit/{id}', [HotelController::class, 'show'])->middleware('roleuser');
Route::post('hotel/update', [HotelController::class, 'update'])->middleware('roleuser');
Route::get('hotel/delete/{id}', [HotelController::class, 'destroy'])->middleware('roleuser');

//User
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('home', [UserController::class, 'home'])->name('home');

//User Kategori
Route::get('user/kategoriwisata', [KategoriController::class, 'kategori_user'])->name('kategori.user');
Route::get('user/detailkategori/{id}', [KategoriController::class, 'detail_kategori']);
Route::get('user/akun/{id}', [UserController::class, 'index'])->name('my.akun');
Route::post('akun/save', [UserController::class, 'store']);

Route::get('user/about', function () {
    return view('user.about');
});
// Route::get('user/akun', function () {
//     return view('user.akun');
// });
 