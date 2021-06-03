<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
// use App\http\Middleware\CheckAge;

Route::get('/', function () {
    return view('welcome');

});
// Route::resource('user','App\Http\Controllers\ManagementUserController');
// Route::get('user', [ManagementUserController::class, 'index']);
// Route::get('user','App\Http\Controllers\ManagementUserController@index');

Route::get('/home',function(){
    return view('frontend/layouts/home');
});

Route::get('/dashboard',function(){
    return view('backend/layouts/dashboard');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });
 
    Route::middleware(['mahasiswa'])->group(function () {
        Route::get('mahasiswa', [MahasiswaController::class, 'index']);
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
});

// Route::get('pengalaman_kerja', 'PengalamanKerjaController@index');

// Route::group(['namespace' => 'Backend'], function(){
//     // Route::resource('dashboard', 'DashboardController');
//     // Route::resource('pendidikan', 'PendidikanController');
//     Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
// });

// Route::get('pengalaman_kerja', 'PengalamanKerjaController');