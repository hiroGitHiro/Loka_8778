<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopInformationController;
use App\Http\Controllers\MenuRegistrationController;


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
Route::get('/',[ShopInformationController::class, 'index'])->name('homepage.index');


// メニュー登録画面
Route::get('/menuSelect',[MenuRegistrationController::class, 'index'])->name('menuSelect.index');
// Route::post('/table',[tablecontroller::class, 'table_information'])->name('table.table_information');
// Route::post('/table/save',[tablecontroller::class, 'save'])->name('table.save');