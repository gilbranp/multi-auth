<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleMenuController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     $title = 'Selamat Datang Den';
//     return view('dashboard',compact('title'));
// });
Route::get('/role', function () {
    $title = 'Selamat Datang Den';
    $name = 'Den';
    return view('role.index',compact('title','name'));
});


Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'doLogin'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::resource('/role',RoleController::class);
    Route::resource('/role_menu',RoleMenuController::class);
});

