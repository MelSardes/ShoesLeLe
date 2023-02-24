<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chaussure extends Model
{
//    use HasFactory;

    protected $fillable=[
        'categorie_id',
        'nom_chaussure',
        'description',
        'nombre_disponible',        
        'marque',
        'prix',
        "image"
    ];

    function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    function promotion() {
        return $this->hasMany(Promotion::class);
    }

    function ligneCommande() {
        return $this->belongsToMany(LigneCommande::class);
    }


}
