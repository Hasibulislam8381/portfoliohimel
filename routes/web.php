<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\GeneralInfoController;

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






Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// // Auth::routes();

// Route::middleware(['auth'])->group(
//     function () {
//         Route::get('/admin',  [BackendController::class, 'admin'])->name('admin');
//         Route::get('/logout', [BackendController::class, 'authLogout'])->name('authLogout');

//         Route::controller(GeneralInfoController::class)->prefix('/admin/general_info')->name('backend.general_info.')->group(function () {

//             Route::get('/create', 'create')->name('create');
//             Route::post('/store', 'store')->name('store');
//             Route::get('/edit/{generalInfo}', 'edit')->name('edit');
//             Route::post('/update/{generalInfo}', 'update')->name('update');
//         });
//         Route::controller(UserController::class)->prefix('/admin/user')->name('backend.user.')->group(function () {
//             Route::get('/', 'index')->name('index');
//             Route::get('/create', 'create')->name('create');
//             Route::post('/store', 'store')->name('store');
//             Route::get('/edit/{user}', 'edit')->name('edit');
//             Route::post('/update/{user}', 'update')->name('update');
//             Route::get('/destroy/{user}', 'destroy')->name('trash');
//             Route::get('/status/{user}', 'status')->name('status');
//             Route::get('/reStore/{id}', 'reStore')->name('reStore');
//             Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
//             Route::get('/profile', 'profile')->name('profile');
//         });
//         Route::controller(PartnerController::class)->prefix('/admin/partner')->name('backend.partner.')->group(function () {
//             Route::get('/', 'index')->name('index');
//             Route::get('/create', 'create')->name('create');
//             Route::post('/store', 'store')->name('store');
//             Route::get('/edit/{partner}', 'edit')->name('edit');
//             Route::post('/update/{partner}', 'update')->name('update');
//             Route::get('/destroy/{partner}', 'destroy')->name('trash');
//             Route::get('/status/{partner}', 'status')->name('status');
//             Route::get('/reStore/{id}', 'reStore')->name('reStore');
//             Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
//         });
//         Route::controller(BlogController::class)->prefix('/admin/blog')->name('backend.blog.')->group(function () {
//             Route::get('/', 'index')->name('index');
//             Route::get('/create', 'create')->name('create');
//             Route::post('/store', 'store')->name('store');
//             Route::get('/edit/{blog}', 'edit')->name('edit');
//             Route::post('/update/{blog}', 'update')->name('update');
//             Route::get('/destroy/{blog}', 'destroy')->name('trash');
//             Route::get('/status/{blog}', 'status')->name('status');
//             Route::get('/reStore/{id}', 'reStore')->name('reStore');
//             Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
//         });
//     }
// );

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
