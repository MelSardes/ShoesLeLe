<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
//    use HasFactory;

    protected $fillable = [
        'client_id',
        'prix_total'
    ];

    function ligneCommande() {
        return $this->belongsToMany(LigneCommande::class);
    }

    public function facture() {
        return $this->hasOne(Facture::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }



}
