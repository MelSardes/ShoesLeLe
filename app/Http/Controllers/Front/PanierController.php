<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Repositories\PanierInterfaceRepository;
use App\Models\Chaussure;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    protected $panierRepository;

    public function __construct(PanierInterfaceRepository $panierRepository)
    {
        $this->panierRepository = $panierRepository;
    }

    # afficher le panier
    public function show()
    {
        return view("front.panier.show");
    }

    # Ajout d'un produit au panier
    public function add(Chaussure $chaussure, Request $request)
    {

        // Validation de la requête
        $this->validate($request, [
            "quantite" => "numeric|min:1"
        ]);

        // Ajout/Mise à jour du produit au panier avec sa quantité
        $this->panierRepository->add($chaussure, $request->quantite);

        // Redirection vers le panier avec un message
        return redirect()->route("panier.show")->withMessage("Produit ajouté au panier");
    }

    // Suppression d'un produit du panier
    public function remove(Chaussure $chaussure)
    {

        // Suppression du produit du panier par son identifiant
        $this->panierRepository->remove($chaussure);

        // Redirection vers le panier
        return back()->withMessage("Produit retiré du panier");
    }

    // Vider la panier
    public function empty()
    {

        // Suppression des informations du panier en session
        $this->panierRepository->empty();

        // Redirection vers le panier
        return back()->withMessage("Panier vidé");
    }
}
