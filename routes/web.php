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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//ホーム画面
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//朝食画面
Route::get('/morning', [App\Http\Controllers\MenuController::class, 'morning'])->name('morning');
//昼食画面
Route::get('/lunch', [App\Http\Controllers\MenuController::class, 'lunch'])->name('lunch');
//夕食画面
Route::get('/dinner', [App\Http\Controllers\MenuController::class, 'dinner'])->name('dinner');
//間食画面
Route::get('/snack', [App\Http\Controllers\MenuController::class, 'snack'])->name('snack');
//アカウント編集
Route::get('/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
//記録カレンダー画面
Route::get('/record', [App\Http\Controllers\MemoController::class, 'record'])->name('record');
