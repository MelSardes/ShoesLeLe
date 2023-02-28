<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\LigneCommande;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller

{
    public function index() {
        // Récupere tous les éléments et retourne la vue index
        $lignes_commande=DB::table('lignes_commande')->get();
        // DB::table('chaussures')
        // $categories=Commande::latest()->get();
        return view('admin.commandes.index',compact('lignes_commande'));
    }



    public function create() {
        //Retourne la vue du formulaire de création
    }



    public function store() {
        // Récupere les données du formulaire d'ajout
        // Ajoute dans la base de données
        // Redirige vers la vue index
    }



    public function show(Int $id) {
        // Retourne une vue affichant un élément d'une table
        // dans la base de données en fonction de l'id
    }



    public function edit(Int $id) {
        //    Retourne une vue du formulare de modification
        // d'un élément de la table dans la base de données
        // en fonction de l'id
    }



    public function update(Int $id) {
        // Récupere les données du formulaire de modification
        // Modifie la ligne de la table dans la base de données
        // Redirige vers la vue index
    }



    public function destroy(Int $id) {
        // Suppprime l'enregistrement de la base de données en fonctin de l'id
        // Redirige vers la vue index
    }
}
