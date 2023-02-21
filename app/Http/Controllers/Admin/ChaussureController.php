<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chaussure;
use Illuminate\Http\Request;

class ChaussureController extends Controller
{
    public function index() {
        // Récupere tous les éléments et retourne la vue index
    }



    public function create() {
        //Retourne la vue du formulaire de création
    }



    public function store(Request $request) {
        // Récupere les données du formulaire d'ajout
        // Ajoute dans la base de données
        // Redirige vers la vue index
    }



    public function show(Chaussure $chaussure) {
        // Retourne une vue affichant un élément d'une table
        // dans la base de données en fonction de l'id
    }



    public function edit(Chaussure $chaussure) {
        //    Retourne une vue du formulare de modification
        // d'un élément de la table dans la base de données
        // en fonction de l'id
    }



    public function update(Chaussure $chaussure) {
        // Récupere les données du formulaire de modification
        // Modifie la ligne de la table dans la base de données
        // Redirige vers la vue index
    }



    public function destroy(Chaussure $chaussure) {
        // Suppprime l'enregistrement de la base de données en fonctin de l'id
        // Redirige vers la vue index
    }
}
