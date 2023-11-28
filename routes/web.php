<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoPanen;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InfoBudidayaController;
use App\Http\Controllers\UserAuthRegisterController;
use App\Http\Controllers\UserAuthLoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PDFController;
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


Route::get('/', function () {
    return view('onboarding');
});

Route::get('/index', [HomeController::class, 'index']);
Route::get('/onboard', [HomeController::class, 'onboard']);

//KONTEN EDUKASI
Route::get('/kontenedukasi', [ViewController::class, 'viewAllContent'])->name('kontenedu');
Route::get('/kontenedukasi/{page}', [ViewController::class, 'getArticles'])->name('kontenedu');
Route::get('/VideoBudidaya/{id}', [ViewController::class, 'viewVideo'])->name('VideoBudidaya');
Route::post('/PostComment', [ViewController::class, 'postComment'])->name('PostComment');
Route::get('/ArtikelBudidaya/{id}', [ViewController::class, 'viewArticle'])->name('ArtikelBudidaya');
Route::post('/PostCommentArticle', [ViewController::class, 'postCommentArticle'])->name('PostCommentArticle');

//KONSULTASI BUDIDAYA
Route::get('/viewmentor', [HomeController::class, 'viewmentor'])->name('viewmentor');

//DAFTAR TUGAS --- TODO BUDIDAYA
Route::get('/daftartugas', [ViewController::class, 'daftartugas'])->name('daftartugas');
Route::get('/viewtotal/{id}', [HomeController::class, 'viewtotal'])->name('viewtotal');
Route::get('/viewparsial/{id}', [HomeController::class, 'viewparsial'])->name('viewparsial');
Route::post('/updateprogress/{id}', [ViewController::class, 'updateProgress'])->name('updateProgress');
Route::post('/updateprogresstotal/{id}', [ViewController::class, 'updateProgressTotal'])->name('updateProgressTotal');

//FAQ
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

//PROFILE
Route::get('/viewprofile/{id}', [ProfileController::class, 'getProfile'])->name('viewprofile');
Route::post('/profile/{id}', [ProfileController::class, 'updateProfile'])->name('updateprofile');

// AUTENTIKASI LOGIN
Route::get('/authlogin', [HomeController::class, 'authlogin']);
Route::post('/login', [UserAuthLoginController::class, 'saveAuthLogin'])->name('login');
Route::get('/logout', [UserAuthLoginController::class, 'logout'])->name('logout');

// AUTENTIKASI REGISTER
Route::get('/authregister', [HomeController::class, 'authregister']);
Route::post('/register', [UserAuthRegisterController::class, 'saveRegister'])->name('register');

//AUTENTIKASI FORGOT PASSWORD
Route::get('/forgotpass', [HomeController::class, 'forgotpass'])->name('forgotpass');

// INFO PANEN
Route::get('/infopanen/{id}', [InfoPanen::class, 'index'])->name('infopanen');
Route::get('/AddDataPanen/{id}', [HomeController::class, 'AddDataPanen']);
Route::post('/saveAddDataPanen', [FormController::class, 'saveAddDataPanen'])->name('saveAddDataPanen');
Route::get('/EditDataPanen/{id}', [FormController::class, 'EditDataPanen']);
Route::post('/saveEditDataPanen/{id}', [FormController::class, 'saveEditDataPanen'])->name('saveEditDataPanen');

// INFO BUDIDAYA
Route::get('/infobudidaya/{id}', [InfoBudidayaController::class, 'index'])->name('infobudidaya');
Route::get('/AddDataBudidaya/{id}', [HomeController::class, 'AddDataBudidaya']);
Route::post('/saveAddDataBudidaya', [FormController::class, 'saveAddDataBudidaya'])->name('saveAddDataBudidaya');
Route::get('/EditDataBudidaya/{id}', [FormController::class, 'EditDataBudidaya']);
Route::post('/saveEditDataBudidaya/{id}', [FormController::class, 'saveEditDataBudidaya'])->name('saveEditDataBudidaya');

Route::get('/downloadPanenPDF/{userId}', [PDFController::class, 'downloadPanenPDF'])->name('downloadPanenPDF');
Route::get('/downloadPDF/{userId}', [PDFController::class, 'downloadBudidayaPDF'])->name('downloadBudidayaPDF');
