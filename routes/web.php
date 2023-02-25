<?php

use App\Http\Controllers\Admin\ChaussureController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminConnexionController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Front\FrontChaussureController;
use App\Http\Controllers\Front\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->group(function () {
    // connexion_page
    Route::get('/',                             [AdminConnexionController::class, 'index'])->name('admin.index');
    // ouverture page dashboard
    Route::get('/dashboard',                    [DashboardController::class, 'index'])->name('admin.dashboard');
    // CHAUSSURES
    Route::get( '/chaussures',                  [ChaussureController::class, 'index'])->name('admin.chaussures');
    Route::get( '/chaussure/create',            [ChaussureController::class, 'create']) ->name('admin.chaussure.create');
    Route::post('/chaussure/store',             [ChaussureController::class, 'store'])  ->name('admin.chaussure.store');
    Route::get( '/chaussure/{chaussure}',       [ChaussureController::class, 'show'])   ->name('admin.chaussure.show');
    Route::get( '/chaussure/{chaussure}/edit',  [ChaussureController::class, 'edit'])   ->name('admin.chaussure.edit');
    Route::put( '/chaussure/{chaussure}',       [ChaussureController::class, 'update']) ->name('admin.chaussure.update');
    Route::delete('/chaussure/{chaussure}',     [ChaussureController::class, 'destroy']) ->name('admin.chaussure.destroy');

    //CATEGORIE
    Route::get( '/categorie',                   [CategorieController::class,'index'])->name('admin.categorie');
    Route::get( '/categorie/create',            [CategorieController::class,'create'])->name('admin.categorie.create');
    Route::post( '/categorie/store',            [CategorieController::class,'store'])->name('admin.categorie.store');
    Route::delete('/categorie/{categorie}',     [CategorieController::class, 'destroy']) ->name('admin.categorie.destroy');

});


    Route::prefix('categories')->group(function () {
        Route::get("/", [WelcomeController::class, 'index'])    ->name('categories');

        Route::get('/{categorie}',              [FrontChaussureController::class, 'index'])  ->name('chaussures.index');
        Route::get('/{categorie}/{chaussure}',  [FrontChaussureController::class, 'show'])   ->named('chassure.show');
    });


    Route::get('/',[WelcomeController::class, 'index'])->name('index');

    Auth::routes();

        
    Route::prefix('/')->group(function () {

        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('',     [App\Http\Controllers\Fronts\WelcomeController::class, 'index'])  ->name('welcome');
        Route::get('', function(){
            return view('welcome');
        });
    });
