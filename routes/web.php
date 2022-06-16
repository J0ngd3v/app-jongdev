<?php

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
Route::group(['middleware' => ['auth']] , function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'AdminHome'])->name('adminhome');
    Route::get('/user', [App\Http\Controllers\DashboardController::class, 'ViewUser'])->name('viewuser');
    Route::get('/add/user', [App\Http\Controllers\DashboardController::class, 'AddUser'])->name('adduser');
    Route::get('/add/tambah', [App\Http\Controllers\DashboardController::class, 'TambahUser'])->name('tambahuser');
    Route::get('/user/delete/{id}', [App\Http\Controllers\DashboardController::class, 'DeleteUser'])->name('deleteuser');
    Route::get('/pesan' , [App\Http\Controllers\DashboardController::class, 'ViewPesan'])->name('viewpesan');
    Route::get('/pesan/delete/{id}' , [App\Http\Controllers\DashboardController::class, 'DeletePesan']);
    Route::get('/youtube' , [App\Http\Controllers\DashboardController::class, 'YoutubeView'])->name('youtube');
    Route::get('/youtube/tambah' , [App\Http\Controllers\DashboardController::class, 'YoutubeTambah']);
    Route::post('/youtube/tambah/vidio' , [App\Http\Controllers\DashboardController::class, 'YoutubeUpload'])->name('upload');
    Route::get('/youtube/delete/{id}' , [App\Http\Controllers\DashboardController::class, 'YoutubeDelete'])->name('delete');
    
});

// Home Routes
Route::get('/' , [App\Http\Controllers\IndexController::class , 'home'])->name('home');
Route::get('/about' , [App\Http\Controllers\IndexController::class , 'about'])->name('about');
Route::get('/contact' , [App\Http\Controllers\IndexController::class , 'contact'])->name('contact');
Route::get('/contact/kirim' ,[App\Http\Controllers\IndexController::class , 'KirimPesan'])->name('KirimPesan');
Route::get('/project' , [App\Http\Controllers\IndexController::class , 'project'])->name('project');
Route::get('/vidio' , [App\Http\Controllers\IndexController::class , 'live'])->name('live');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
