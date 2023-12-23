<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\LoaisanphamController;
use App\Http\Controllers\Permission\PermissionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomesanphamController;
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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/',[HomeController::class,'viewHome'])->name('home');

Route::get('/sanpham',[HomesanphamController::class,'viewHomesanpham'])->name('home.Sanpham');

Route::post('/sanpham',[HomesanphamController::class,'handleAjaxRequest']);

// Role
Route::get('/permission/role',[PermissionController::class,'viewRoles']);



Route::get('/admin/login',[LoginController::class,'index'])->name('login');
Route::post('/admin/login/store',[LoginController::class,'store']);

//Route::get('/admin/main',[MainController::class,'index'])->name('admin')->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('main',[MainController::class,'index'])->name('admin');

        // Quan Ly San Pham
        Route::prefix('sanpham')->group(function () {
            Route::get('add',[SanphamController::class,'create'])->name('AddSanpham');
            Route::post('add/store',[SanphamController::class,'store']);
            Route::get('list',[SanphamController::class,'list']);
            Route::get('edit/{sanpham}',[SanphamController::class,'edit']);
            Route::post('edit/{sanpham}',[SanphamController::class,'postedit'])->name('EditSanPham');
            Route::DELETE('delete',[SanphamController::class,'delete']);
        });

        // Quan Ly Loai San Pham
        Route::prefix('loaisanpham')->group(function () {
            Route::get('addType',[LoaisanphamController::class,'create']);
            Route::post('addType/store',[LoaisanphamController::class,'store']);
            Route::get('listType',[LoaisanphamController::class,'list']);
            Route::get('editType/{loaisanpham}',[LoaisanphamController::class,'edit']);
            Route::post('editType/{loaisanpham}',[LoaisanphamController::class,'postedit'])->name('EditType');
            Route::DELETE('delete',[LoaisanphamController::class,'delete']);
        });

        // Quan Ly Anh
        Route::prefix('fileImage')->group(function () {
            Route::get('addImage',[ImageController::class,'create'])->name('AddImg');
            Route::post('addImage/store',[ImageController::class,'addImage'])->name('AddImg.store');
            Route::get('listImage',[ImageController::class,'list'])->name('listImage');
//    Route::get('edit/{sanpham}',[SanphamController::class,'edit']);
//    Route::post('edit/{sanpham}',[SanphamController::class,'postedit'])->name('EditSanPham');
            Route::DELETE('deleteImage',[ImageController::class,'deleteImages'])->name('DeleteImage');
        });
    });
});



