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



    public function update(Request $request, Categorie $categorie) {
        // Récupere les données du formulaire de modification
        // Modifie la ligne de la table dans la base de données
        // Redirige vers la vue index
        $rules = [
            'nom_categorie' => 'required',
            'description'=>'',
            // "image"  => 'bail|required|image|mimes:jpg,png,jpeg|max:1024',
        ];
        // $chemin_image = $request->image->store("chaussures");

        // if ($request->has("chaussures")) {
            // On ajoute la règle de validation pour "picture"
            // $rules["chaussures"] = 'bail|required|image|max:1024';
        // }
        $this->validate($request, $rules);
        // 2. On upload l'image dans "/storage/app/public/posts"
        // if ($request->has("image")) {

            //On supprime l'ancienne image
            // Chaussure::destroy($chaussure->image);

            $categorie->update([
            "nom_categorie" => $request->nom_categorie,
            "description" => $request->description,
            
            // "image" => isset($chemin_image) ? $chemin_image : $chaussure->image,
                
            ]);

           
        // }
         // 4. On affiche le Post modifié : route("posts.show")
            return redirect(route("admin.categorie", $categorie));
    
    }


    public function destroy(Categorie $categorie) {
        // Suppprime l'enregistrement de la base de données en fonctin de l'id
        // Redirige vers la vue index
        $categorie->delete();

        // Redirection route "posts.index"
            return redirect(route('admin.categorie'));
    }
}
