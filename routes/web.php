<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopInformationController;
use App\Http\Controllers\MenuRegistrationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ExteriorController;
use App\Http\Controllers\ActivityController;


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

// Route::get('/', function () {
//     return view('layouts.layout');
// });


// メニュー画面
Route::get('/',[ShopInformationController::class, 'index'])->name('home.index');

// 店舗メニュー画面
Route::get('/menu',[MenuController::class, 'index'])->name('menu.index');

// 店舗遊び画面
Route::get('/activity',[ActivityController::class, 'index'])->name('activity.index');

// 店舗背景画面
Route::get('/exterior',[ExteriorController::class, 'index'])->name('exterior.index');

// メニュー登録画面
Route::get('/menuSelect',[MenuRegistrationController::class, 'index'])->name('menuSelect.index');
Route::post('/menuSelect/save',[MenuRegistrationController::class, 'save'])->name('menuSelect.save');
// Route::post('/table/save',[tablecontroller::class, 'save'])->name('table.save');


