<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
//    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'code_postal',
        'ville',
        'adresse',
        'localite',
        'mail'
    ];

    public function commande() {
        return $this->hasMany(Commande::class);
    }

}

