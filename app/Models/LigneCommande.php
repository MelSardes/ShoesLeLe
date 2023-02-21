<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
//    use HasFactory;

    protected $fillable = [
        'chaussure_id',
        'commande_id',
        'prix_unitaire',
        'quantite'
    ];

    function ligneCommande() {
        return $this->belongsTo(Commande::class);
    }

    function chaussure() {
        return $this->belongsTo(Chaussure::class);
    }



}
