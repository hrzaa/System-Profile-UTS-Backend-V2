<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agama50Controller;
use App\Http\Controllers\User50Controller;
use App\Http\Controllers\Detail_data50Controller;
use App\Http\Controllers\Index50;
use Illuminate\Support\Facades\Auth;

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

// Route login
Route::get('/login50', [User50Controller::class, 'login50'])->name('login50');
Route::post('/loginProses50', [User50Controller::class, 'loginProses50'])->name('loginProses50');

// Route Register
Route::get('/register50', [User50Controller::class, 'register50'])->name('register50');
Route::post('/registerProses50', [User50Controller::class, 'registerProses50'])->name('registerProses50');

//Route User
Route::middleware(['auth', 'hakakses:role'])->group(function () {

    // route index
    Route::get('/', [Index50::class, 'index50'])->name('index50');

    // Route untuk cek user sudah di approve atau belum
    Route::get('/nonaktif50', [User50Controller::class, 'nonaktif50']);

    // Menu User
    Route::get('/users50', [User50Controller::class, 'users50'])->name('users50');
    Route::get('/detailUser50/{id}', [User50Controller::class, 'detailUser50'])->name('detailUser50');
    Route::get('/profile50', [User50Controller::class, 'profile50'])->name('profile50');

    // Menu Update Password
    Route::get('/updatePassword50', [User50Controller::class, 'updatePassword50'])->name('updatePassword50');
    Route::post('/updatePasswordProses50/{id}', [User50Controller::class, 'updatePasswordProses50'])->name('updatePasswordProses50');

    // Menu Logout
    Route::get('/logout50', [User50Controller::class, 'logout50'])->name('logout50');

    // Detail data
    Route::get('/detailData50', [Detail_data50Controller::class, 'detailData50'])->name('detailData50');

    Route::get('/createData50', [Detail_data50Controller::class, 'createData50'])->name('createData50');
    Route::post('/createDataProses50', [Detail_data50Controller::class, 'createDataProses50'])->name('createDataProses50');

    Route::get('/updateData50', [Detail_data50Controller::class, 'updateData50'])->name('updateData50');
    Route::post('/updateDataProses50', [Detail_data50Controller::class, 'updateDataProses50'])->name('updateDataProses50');
});


// Route Admin
Route::middleware(['auth', 'hakadmin:role'])->group(function () {
    // Route Menu User
    Route::get('/detail/{id}', [Detail_data50Controller::class, 'detailData'])->name('detailData');
    Route::get('/detailData50/{id}', [Detail_data50Controller::class, 'detailData50'])->name('detailData50');
    Route::get('/deleteUser50/{id}', [User50Controller::class, 'deleteUser50'])->name('deleteUser50');
    Route::get('/approveUser50/{id}', [User50Controller::class, 'approveUser50'])->name('approveUser50');

    //Route Menu Agama
    Route::get('/agama50', [Agama50Controller::class, 'agama50'])->name('agama50');
    Route::get('/createAgama50', [Agama50Controller::class, 'createAgama50'])->name('createAgama50');
    Route::post('/createAgama50Proses', [Agama50Controller::class, 'createAgama50Proses'])->name('createAgama50Proses');
    Route::get('/deleteAgama50Proses/{id}', [Agama50Controller::class, 'deleteAgama50Proses'])->name('deleteAgama50Proses');
    Route::get('/updateAgama50/{id}', [Agama50Controller::class, 'updateAgama50'])->name('updateAgama50');
    Route::post('/updateAgama50Proses/{id}', [Agama50Controller::class, 'updateAgama50Proses'])->name('updateAgama50Proses');

    
    
});

// 

