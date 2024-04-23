<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class,'admin'])->name('admin.home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class,'managerHome'])->name('manager.home');
});

Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
    Route::get('/superadmin/home', [HomeController::class,'superadmin'])->name('superadmin.home');
});

Route::middleware(['auth', 'user-access:dosen'])->group(function () {
    Route::get('/dosen/home', [HomeController::class,'dosen'])->name('dosen.home');
});
Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () {
    Route::get('/mahasiswa/home', [HomeController::class,'mahasiswa'])->name('mahasiswa.home');
});
Route::middleware(['auth', 'user-access:tendik'])->group(function () {
    Route::get('/tendik/home', [HomeController::class,'tendik'])->name('tendik.home');
});
Route::middleware(['auth', 'user-access:akademik'])->group(function () {
    Route::get('/akademik/home', [HomeController::class,'akademik'])->name('akademik.home');
});
Route::middleware(['auth', 'user-access:keuangan'])->group(function () {
    Route::get('/keuangan/home', [HomeController::class,'keuangan'])->name('keuangan.home');
});
Route::middleware(['auth', 'user-access:direktur'])->group(function () {
    Route::get('/direktur/home', [HomeController::class,'direktur'])->name('direktur.home');
});
Route::middleware(['auth', 'user-access:wd1'])->group(function () {
    Route::get('/wd1/home', [HomeController::class,'wd1'])->name('wd1.home');
});
Route::middleware(['auth', 'user-access:wd2'])->group(function () {
    Route::get('/wd2/home', [HomeController::class,'wd2'])->name('wd2.home');
});
Route::middleware(['auth', 'user-access:wd3'])->group(function () {
    Route::get('/wd3/home', [HomeController::class,'wd3'])->name('wd3.home');
});
Route::middleware(['auth', 'user-access:lppm'])->group(function () {
    Route::get('/lppm/home', [HomeController::class,'lppm'])->name('lppm.home');
});
Route::middleware(['auth', 'user-access:sdm'])->group(function () {
    Route::get('/sdm/home', [HomeController::class,'sdm'])->name('sdm.home');
});


