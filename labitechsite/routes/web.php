<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KemitraanController;
use App\Http\Controllers\LayananKarirController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\ArtikelController;

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminMainPageController;
use App\Http\Controllers\AdminSecPageController;
use App\Http\Controllers\AdminPartnershipController;

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

// Front Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/article/{article:slug}', [HomeController::class, 'showarticle']);
Route::get('/visimisi', [VisiMisiController::class, 'index']);
Route::get('/aplikasi', [AplikasiController::class, 'index']);
Route::get('/akreditasi', [AkreditasiController::class, 'index']);
Route::get('/layanankarir', [LayananKarirController::class, 'index']);
Route::get('/kemitraan', [KemitraanController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);

// BRANCHES

Route::get('/admlab', function () {
    return view('auth.login');
});

Route::get('/dashboard', [AdminHomeController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.homeadmin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admbranches', [AdminMainPageController::class, 'jumlahsekolah']);
Route::post('/createbranches', [AdminMainPageController::class, 'createbranches']);
Route::put('/updatebranches/{id}', [AdminMainPageController::class, 'updatebranches']);
Route::get('/deletebranches/{id}', [AdminMainPageController::class, 'deletebranches']);

// BANNER
Route::get('/admbanner', [AdminMainPageController::class, 'banner']);
Route::put('/admbanner/update/{id}', [AdminMainPageController::class, 'updatebanner']);

// TESTIMONIAL
Route::get('/admtestimon', [AdminMainPageController::class, 'testimonials']);
Route::post('/createtestimon', [AdminMainPageController::class, 'createtestimonials']);
Route::put('/updatetestimon/{id}', [AdminMainPageController::class, 'updatetestimonials']);
Route::get('/deletetestimon/{id}', [AdminMainPageController::class, 'deletetestimonials']);

// PROMOTION
Route::get('/admpromotion',[AdminMainPageController::class, 'promotion']);
Route::put('/updateHeropromotion/{id}',[AdminMainPageController::class, 'promotionHeroUpdate']);
Route::post('/createChildpromotion', [AdminMainPageController::class, 'promotionChildCreate']);
Route::put('/updateChildpromotion/{id}', [AdminMainPageController::class, 'promotionChildUpdate']);
Route::get('/deleteChildpromotion/{id}', [AdminMainPageController::class, 'promotionChildDelete']);

// PICT
Route::get('/admhomepict', [AdminMainPageController::class, 'homePict']);
Route::post('/createhomephotos', [AdminMainPageController::class, 'createHomePict']);
Route::put('/updatehomephotos/{id}', [AdminMainPageController::class, 'updateHomePict']);
Route::get('/deletehomephotos/{id}', [AdminMainPageController::class, 'DeleteHomePict']);

// VIDEO
Route::get('/admvideo', [AdminMainPageController::class, 'video']);
Route::post('/storevid', [AdminMainPageController::class, 'storefirstroll']);
Route::put('/editvid/{id}', [AdminMainPageController::class, 'editfirstroll']);
Route::get('/deletevid/{id}', [AdminMainPageController::class, 'deletefirstroll']);

// ARTIKEL
Route::get('/admarticle', [AdminMainPageController::class, 'article']);

// VISI MISI
Route::get('/admvisimisi', [AdminSecPageController::class, 'visimisi']);
Route::put('/editvisimisi/{id}', [AdminSecPageController::class, 'editvisimisi']);

// APP
Route::get('/admapp', [AdminSecPageController::class, 'application']);
Route::post('/createapp', [AdminSecPageController::class, 'createapp']);
Route::put('/updateapp/{id}', [AdminSecPageController::class, 'updateapp']);
Route::get('/deleteapp/{id}', [AdminSecPageController::class, 'deleteapp']);

// VACANCY
Route::get('/admvacancies', [AdminSecPageController::class, 'vacancies']);
Route::post('/createvacancies', [AdminSecPageController::class, 'createvacancies']);
Route::put('/updatevacancies/{id}', [AdminSecPageController::class, 'updatevacancies']);
Route::get('/deletevacancies/{id}', [AdminSecPageController::class, 'deletevacancies']);

// CONTACT
Route::get('/admcontact', [AdminSecPageController::class, 'contact']);
Route::put('/updatecontact/{id}', [AdminSecPageController::class, 'updatecontact']);

// HEADER KEMITRAAN
Route::get('/admlab/admheader', [AdminPartnershipController::class, 'admheader']);
Route::put('/admlab/admheader/updateheader/{id}', [AdminPartnershipController::class, 'updateheader']);

// VIDEO KEMITRAAN
Route::get('/admlab/admvideo', [AdminPartnershipController::class, 'admvideo']);
Route::put('/admlab/admvideo/editvideo/{id}', [AdminPartnershipController::class, 'updateadmvideo']);

// PROGRAM KEMITRAAN
Route::get('/admlab/admprogram', [AdminPartnershipController::class, 'admprogram']);
Route::post('/admlab/admprogram/admcreatepartprogram', [AdminPartnershipController::class, 'createprogram']);
Route::get('/admlab/admprogram/admdeletepartprogram/{id}', [AdminPartnershipController::class, 'deletepartprogram']);
Route::put('/admlab/admprogram/admupdatepartprogram/{id}', [AdminPartnershipController::class, 'updatepartprogram']);

// BANNER KEMITRAAN
Route::get('/admlab/admbanner', [AdminPartnershipController::class, 'admbanner']);
Route::put('/admlab/admbanner/admupdatebanner/{id}', [AdminPartnershipController::class, 'updatebanner']);
});

require __DIR__.'/auth.php';
