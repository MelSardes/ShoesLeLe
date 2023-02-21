<?php

namespace App\Http\Controllers\Admin;

class CommandeController extends Controller

{
    public function index() {
        // Récupere tous les éléments et retourne la vue index
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
