<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
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
    return view('layouts.home');
});

Route::get('group', [GroupController::class, 'index'])->name('group.index');
Route::get('user/group/create', [GroupController::class, 'create'])->name('group.create');
Route::post('user/group/store', [GroupController::class, 'store'])->name('group.store');
Route::delete('user/group/delete/{id}', [GroupController::class, 'destroy'])->name('group.destroy');

Route::resource('users', UserController::class);