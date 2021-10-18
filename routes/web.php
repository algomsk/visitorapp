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
    return view('add');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\VisitorController::class, 'ListVisitor'])->name('home')->middleware('auth');

Route::post('/saveVisitor', [App\Http\Controllers\VisitorController::class, 'AddVisitor'])->name('saveVisitor');

Route::get('/export', [App\Http\Controllers\VisitorController::class, 'export'])->name('export');
