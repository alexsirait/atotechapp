<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
Route::get('/index', [DashboardController::class, 'index'])->name('index');
Route::get('/', [DashboardController::class, 'start'])->name('start');
Route::get('/masterdata', [MasterDataController::class, 'masterdata'])->name('masterdata');
Route::get('/showBarang', [MasterDataController::class, 'showBarang'])->name('showBarang');
Route::get('/insertBarang', [MasterDataController::class, 'insertBarang'])->name('insertBarang');
Route::get('/updateBarang', [MasterDataController::class, 'updateBarang'])->name('updateBarang');
Route::get('/deleteBarang', [MasterDataController::class, 'deleteBarang'])->name('deleteBarang');
Route::get('/dataBarang', [MasterDataController::class, 'dataBarang'])->name('dataBarang');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/auth', [LoginController::class, 'auth'])->name('auth');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/registerInsert', [LoginController::class, 'registerInsert'])->name('registerInsert');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');