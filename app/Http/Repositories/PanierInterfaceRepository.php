<?php

namespace App\Http\Repositories;

use App\Models\Chaussure;

interface PanierInterfaceRepository
{
    // Afficher le panier
    public function show();

    // Ajouter un produit au panier
    public function add(Chaussure $chaussure, $quantite);

    // Retirer un produit du panier
    public function remove(Chaussure $chaussure);

    // Vider le panier
    public function empty();
}
