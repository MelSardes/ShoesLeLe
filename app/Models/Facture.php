<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
//    use HasFactory;

    protected $fillable = ['commande_id', 'adresse_de_livraison'];

    function commande() {
        return $this->belongsTo(Commande::class);
    }

}
