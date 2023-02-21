<?php

use App\Http\Controllers\Admin\ChaussureController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    // CHAUSSURES
    Route::get( '/chaussures',                  [ChaussureController::class, 'index'])  ->name('admin.chaussures');
    Route::get( '/chaussure/create',            [ChaussureController::class, 'create']) ->name('admin.chaussure.create');
    Route::post('/chaussure/store',             [ChaussureController::class, 'store'])  ->name('admin.chaussure.store');
    Route::get( '/chaussure/{chaussure}',       [ChaussureController::class, 'show'])   ->name('admin.chaussure.show');
    Route::get( '/chaussure/{chaussure}/edit',  [ChaussureController::class, 'edit'])   ->name('admin.chaussure.edit');
    Route::put( '/chaussure/{chaussure}',       [ChaussureController::class, 'update']) ->name('admin.chaussure.update');
    Route::delete('/chaussure/{chaussure}',     [ChaussureController::class, 'destroy']) ->name('admin.chaussure.destroy');



});
