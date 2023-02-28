<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ChaussureController;
use App\Http\Controllers\Admin\CommandeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FactureController;
use App\Http\Controllers\AdminConnexionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\FrontChaussureController;
use App\Http\Controllers\Front\FrontCommandeController;
use App\Http\Controllers\Front\PanierController;
use App\Http\Controllers\Front\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::post('/auth',                            [AdminConnexionController::class, 'connexionAdmin'])->name('admin.connexion');

Route::prefix('admin')->group(function () {
    // connexion_page
    Route::get('/',                             [AdminConnexionController::class, 'index'])->name('admin.index');

    // ouverture page dashboard
    Route::get('/dashboard',                    [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/commandes/index',         [CommandeController::class,'index'])->name('admin.commandes');
    // Route::get('/auth/login',                    [DashboardController::class, 'connexion'])->name('admin.connexion');

    // CHAUSSURES
    Route::get('/chaussures',                   [ChaussureController::class, 'index'])->name('admin.chaussures');
    Route::get('/chaussure/create',             [ChaussureController::class, 'create'])->name('admin.chaussure.create');
    Route::post('/chaussure/store',             [ChaussureController::class, 'store'])->name('admin.chaussure.store');
    Route::get('/chaussure/{chaussure}',        [ChaussureController::class, 'show'])->name('admin.chaussure.show');
    Route::get('/chaussure/{chaussure}/edit',   [ChaussureController::class, 'edit'])->name('admin.chaussure.edit');
    Route::put('/chaussure/{chaussure}',        [ChaussureController::class, 'update'])->name('admin.chaussure.update');
    Route::delete('/chaussure/{chaussure}',     [ChaussureController::class, 'destroy'])->name('admin.chaussure.destroy');

    //CATEGORIE
    Route::get('/categorie',                    [CategorieController::class, 'index'])->name('admin.categorie');
    Route::get('/categorie/create',             [CategorieController::class, 'create'])->name('admin.categorie.create');
    Route::post('/categorie/store',             [CategorieController::class, 'store'])->name('admin.categorie.store');
    Route::put('/categorie/{categorie}',        [CategorieController::class, 'update'])->name('admin.categorie.update');
    Route::delete('/categorie/{categorie}',     [CategorieController::class, 'destroy'])->name('admin.categorie.destroy');
});


    Route::prefix('categories')->group(function () {
    // Route::get("/", [FrontChaussureController::class, 'index'])->name('categories');
    Route::get('/{categorie}',                  [FrontChaussureController::class, 'showAll'])->name('categorie.show');
});


// Les routes de gestion du panier
    Route::prefix('chaussure')->group(function () {
        Route::get('/{chaussure}',              [FrontChaussureController::class, 'show'])->name('chaussure.show');
    });

    Route::prefix('panier')->group(function () {
        Route::get('/',                         [PanierController::class, 'show'])->name('panier.show');
        Route::post('/add/{chaussure}',         [PanierController::class, 'add'])->name('panier.add');
        Route::get('/remove/{chaussure}',       [PanierController::class, 'remove'])->name('panier.remove');
        Route::get('/empty',                    [PanierController::class, 'empty'])->name('panier.empty');
    });


Route::prefix('commande')->group(function () {
    Route::get('/',                             [FrontCommandeController::class, 'precommande'])->name('commande.precommande');
    Route::post('/store',                       [FrontCommandeController::class, 'store'])->name('commande.store');
    Route::post('/telecharger_facture/{commande_id}', [FrontCommandeController::class, 'telechargerFacture'])->name('facture.telecharger');
});

Route::get('/', [WelcomeController::class, 'index'])->name('index');

// Auth::routes();


// Route::prefix('/')->group(function () {

//     Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::get('',     [App\Http\Controllers\Fronts\WelcomeController::class, 'index'])->name('welcome');
//     Route::get('', function () {
//         return view('welcome');
//     });
// });

Auth::routes();

        
    Route::prefix('/')->group(function () {
        // Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
        Route::get('home', [WelcomeController::class, 'indexConnexion'])->name('home');
        Route::get('deconnexion',[App\Http\Controllers\AuthController::class, 'deconnexion'])->name('deconnexion');
        Route::get('front/account/profil/index', [WelcomeController::class, 'profil'])->name('profil');
        Route::get('front/account/commande/index', [WelcomeController::class, 'commande'])->name('commande');
        Route::get('front/account/commande/index', [WelcomeController::class, 'listeCommande'])->name('commande');
        Route::get('front/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard');
        // Route::get('front/dashboard', [WelcomeController::class, 'compter'])->name('compter');


        // Route::get('',     [App\Http\Controllers\Fronts\WelcomeController::class, 'index'])  ->name('welcome');
        // Route::get('', function(){
        //     return view('welcome');
        // });
    });
