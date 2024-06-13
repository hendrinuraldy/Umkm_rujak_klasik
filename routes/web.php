<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserReviewController;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', [PageController::class, 'landingPage'])->name('landing');
Route::get('/contact', [PageController::class, 'contact'])->name('landing.contact');
Route::get('/login', function () {
    return view('auth.login');
})->middleware('isLogin')->name('login.page');

Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/review', [UserReviewController::class, 'store'])->name('review.post');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [PageController::class, 'admin'])->name('admin');
    Route::get('/admin/tambah-menu', [PageController::class, 'addMenu'])->name('menu.create');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/admin/show/{slug}', [PageController::class, 'updateMenu'])->name('menu.show');
    Route::get('/admin/list-review', [PageController::class, 'reviewAdmin'])->name('admin.review');
    Route::get('/admin/testimoni/create', [PageController::class, 'testimoniAdmin'])->name('admin.testimoni.create');
    Route::get('/admin/list-testimoni/', [PageController::class, 'showListTestimoni'])->name('admin.testimoni.show');
    Route::get('/admin/promo', [PageController::class, 'showListPromo'])->name('admin.promo');
    Route::get('/admin/promo/create', [PageController::class, 'createPromo'])->name('admin.promo.create');
    Route::get('/admin/promo/show/{slug}', [PageController::class, 'showPromo'])->name('admin.promo.show');

    // Post
    Route::post('/admin/tambah-menu/store', [MenuController::class, 'store'])->name('menu.store');
    Route::post('/admin/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::post('/admin/promo/store', [PromoController::class, 'store'])->name('promo.store');

    // Delete
    Route::delete('/admin/{slug}/delete', [MenuController::class, 'destroy'])->name('menu.destroy');
    Route::delete('/admin/promo/{slug}/delete', [PromoController::class, 'destroy'])->name('promo.destroy');
    Route::delete('/admin/testimoni/{id}/delete', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
    Route::delete('/admin/list-review/{review}/delete', [UserReviewController::class, 'destroy'])->name('review.destroy');

    // Patch
    Route::patch('/admin/{slug}/update', [MenuController::class, 'update'])->name('menu.update');
    Route::patch('/admin/promo/{slug}/update', [PromoController::class, 'update'])->name('admin.promo.update');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
