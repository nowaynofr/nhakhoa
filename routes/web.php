<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use PgSql\Lob;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/benhnhan', [BenhnhanController::class, 'index'])->name('benhnhan.index');
    Route::get('/benhnhan/{id}', [BenhnhanController::class, 'show'])->name('benhnhan.show');
    Route::get('/benhnhan/create', [BenhnhanController::class, 'create'])->name('benhnhan.create');
    Route::get('/benhnhan/{id}/edit', [BenhnhanController::class, 'edit'])->name('benhnhan.edit');
    Route::patch('/benhnhan/{id}', [BenhnhanController::class, 'update'])->name('benhnhan.update');
    Route::delete('/benhnhan/{id}', [BenhnhanController::class, 'destroy'])->name('benhnhan.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/hoadon', [HoadonController::class, 'new'])->name('hoadon.new');
    Route::get('/hoadon', [HoadonController::class, 'edit'])->name('hoadon.edit');
    Route::patch('/hoadon', [HoadonController::class, 'update'])->name('hoadon.update');
    Route::delete('/hoadon', [HoadonController::class, 'destroy'])->name('hoadon.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/dichvu', [DichvuController::class, 'new'])->name('dichvu.new');
    Route::get('/dichvu', [DichvuController::class, 'edit'])->name('dichvu.edit');
    Route::patch('/dichvu', [DichvuController::class, 'update'])->name('dichvu.update');
    Route::delete('/dichvu', [DichvuController::class, 'destroy'])->name('dichvu.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/donvitinh', [DonvitinhController::class, 'new'])->name('donvitinh.new');
    Route::get('/donvitinh', [DonvitinhController::class, 'edit'])->name('donvitinh.edit');
    Route::patch('/donvitinh', [DonvitinhController::class, 'update'])->name('donvitinh.update');
    Route::delete('/donvitinh', [DonvitinhController::class, 'destroy'])->name('donvitinh.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/nhanvien', [NhanvienController::class, 'new'])->name('nhanvien.new');
    Route::get('/nhanvien', [NhanvienController::class, 'edit'])->name('nhanvien.edit');
    Route::patch('/nhanvien', [NhanvienController::class, 'update'])->name('nhanvien.update');
    Route::delete('/nhanvien', [NhanvienController::class, 'destroy'])->name('nhanvien.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/sokhambenh', [SokhambenhController::class, 'new'])->name('sokhambenh.new');
    Route::get('/sokhambenh', [SokhambenhController::class, 'edit'])->name('sokhambenh.edit');
    Route::patch('/sokhambenh', [SokhambenhController::class, 'update'])->name('sokhambenh.update');
    Route::delete('/sokhambenh', [SokhambenhController::class, 'destroy'])->name('sokhambenh.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/thuoc', [ThuocController::class, 'new'])->name('thuoc.new');
    Route::get('/thuoc', [ThuocController::class, 'edit'])->name('thuoc.edit');
    Route::patch('/thuoc', [ThuocController::class, 'update'])->name('thuoc.update');
    Route::delete('/thuoc', [ThuocController::class, 'destroy'])->name('thuoc.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/tintuc', [TintucController::class, 'new'])->name('tintuc.new');
    Route::get('/tintuc', [TintucController::class, 'edit'])->name('tintuc.edit');
    Route::patch('/tintuc', [TintucController::class, 'update'])->name('tintuc.update');
    Route::delete('/tintuc', [TintucController::class, 'destroy'])->name('tintuc.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'new'])->name('user.new');
    Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user', [UserController::class, 'destroy'])->name('user.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/vattu', [VattuController::class, 'new'])->name('vattu.new');
    Route::get('/vattu', [VattuController::class, 'edit'])->name('vattu.edit');
    Route::patch('/vattu', [VattuController::class, 'update'])->name('vattu.update');
    Route::delete('/vattu', [VattuController::class, 'destroy'])->name('vattu.destroy');
});


require __DIR__ . '/auth.php';
