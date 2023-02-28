<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Chaussure;
use Illuminate\Http\Request;

class ChaussureController extends Controller
{
    public function index() {
        // Récupere tous les éléments et retourne la vue index
        $chaussures=Chaussure::latest()->get();
        $categories=Categorie::latest()->get();
        return view('admin.chaussures.index', compact('categories', 'chaussures'));
    }


    public function create() {
        //Retourne la vue du formulaire de création
        $categories=Categorie::latest()->get();
        return view('admin.chaussures.create', compact('categories'));
    }



    public function store(Request $request) {
        // Récupere les données du formulaire d'ajout
        // Ajoute dans la base de données
        // Redirige vers la vue index
        $request -> validate([
            
            'categorie_id'=>'required',
            'nom_chaussure' => 'required',
            'prix' => 'required',
            'description'=>'',
            'nombre_disponible' => 'required',       
            'marque' => 'required',
            "image"  => 'bail|required|image|mimes:jpg,png,jpeg,jfif',
            
           ]);
        
           $chemin_image = $request->image->store("chaussures");
        
           Chaussure::create([
            "categorie_id" => $request->categorie_id,
            "nom_chaussure" => $request->nom_chaussure,
            "prix" => $request->prix,
            "description" => $request->description,
            "nombre_disponible" => $request->nombre_disponible,
            "marque" => $request->marque,
            "image" => $chemin_image
           ]);
        return redirect()-> route('admin.chaussures') ->with('success','categorie enregisté');
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



    public function update(Request $request, Chaussure $chaussure) {
        // Récupere les données du formulaire de modification
        // Modifie la ligne de la table dans la base de données
        // Redirige vers la vue index
        $rules = [
            'nom_chaussure' => 'required',
            'prix' => 'required',
            'description'=>'',
            'nombre_disponible' => 'required',       
            'marque' => 'required',
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

            $chaussure->update([
            "nom_chaussure" => $request->nom_chaussure,
            "prix" => $request->prix,
            "description" => $request->description,
            "nombre_disponible" => $request->nombre_disponible,
            "marque" => $request->marque,
            // "image" => isset($chemin_image) ? $chemin_image : $chaussure->image,
                
            ]);

           
        // }
         // 4. On affiche le Post modifié : route("posts.show")
            return redirect(route("admin.chaussures", $chaussure));
    
    }



    public function destroy(Chaussure $chaussure) {
        // Suppprime l'enregistrement de la base de données en fonctin de l'id
        // Redirige vers la vue index
        $chaussure->delete();

    // Redirection route "posts.index"
        return redirect(route('admin.chaussures'));
    }

}
