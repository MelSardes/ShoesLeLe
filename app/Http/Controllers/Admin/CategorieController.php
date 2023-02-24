<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index() {
        // Récupere tous les éléments et retourne la vue index
        // return view('admin.categorie.index');
        $categories=Categorie::latest()->get();
        return view('admin.categorie.index', compact('categories'));

    }



    public function create() {
        //Retourne la vue du formulaire de création
        $categories=Categorie::latest()->get();
        return view('admin.categorie.create', compact('categories'));
    }



    public function store(Request $request) {
        // Récupere les données du formulaire d'ajout
        // Ajoute dans la base de données
        // Redirige vers la vue index
        $request->validate([
            'nom_categorie' => 'required',
            'description' => '',
           
        ]);
        Categorie::create([
            'nom_categorie' =>  $request->nom_categorie,
            'description' =>  $request->description,
        ]);
    //    Categorie::create($request->all());
    //    return redirect()-> route("admin.categorie") ->with('success','categorie enregisté');
        
    return redirect()-> route('admin.categorie') ->with('success','categorie enregisté');
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



    public function destroy(Categorie $categorie) {
        // Suppprime l'enregistrement de la base de données en fonctin de l'id
        // Redirige vers la vue index
        $categorie->delete();

        // Redirection route "posts.index"
            return redirect(route('admin.categorie'));
    }
}
