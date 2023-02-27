<?php

namespace App\Http\Repositories;

use App\Http\Repositories\PanierInterfaceRepository;
use App\Models\Chaussure;

class PanierSessionRepository implements PanierInterfaceRepository
{

    # Afficher le panier
    public function show()
    {
        return view("panier.show");
    }

    # Ajouter/Mettre à jour un produit du panier
    public function add(Chaussure $chaussure, $quantite)
    {
        $panier = session()->get("panier"); // On récupère le panier en session

        // Les informations du produit à ajouter
        $details_chaussure = [
            'id' => $chaussure->id,
            'nom_chaussure' => $chaussure->nom_chaussure,
            'prix' => $chaussure->prix,
            'quantite' => $quantite
        ];

        $panier[$chaussure->id] = $details_chaussure; // On ajoute ou on met à jour le produit au panier
        session()->put("panier", $panier); // On enregistre le panier
    }

    # Retirer un produit du panier
    public function remove(Chaussure $chaussure)
    {
        $panier = session()->get("panier"); // On récupère le panier en session
        unset($panier[$chaussure->id]); // On supprime le produit du tableau $panier
        session()->put("panier", $panier); // On enregistre le panier
    }

    # Vider le panier
    public function empty()
    {
        session()->forget("panier"); // On supprime le panier en session
    }
}
