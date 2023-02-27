<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Facture;
use App\Models\LigneCommande;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Barryvdh\DomPDF\Facade\Pdf;


class FrontCommandeController extends Controller
{
    public function precommande()
    {
        return view("front.commande.precommander");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom',
            'prenom',
            'contact',
            'code_postal',
            'ville',
            'adresse',
            'localite',
            'mail'
        ]);


        if (session()->has('panier')) {
            DB::transaction(function () {
                $total = 0;

                foreach (session('panier') as $key => $chaussure) {
                    $total += $chaussure['prix'] * $chaussure['quantite'];
                }

                $commande = Commande::create([
                    "client_id" => 1,
                    "prix_total" => $total,
                    "status" => 'En attente'
                ]);

                foreach (session('panier') as $key => $chaussure) {
                    // $total += $chaussure['prix'] * $chaussure['quantite'];

                    DB::table('lignes_commande')->insert([
                        "chaussure_id" => $chaussure['id'],
                        "commande_id" => $commande->id,
                        "prix_unitaire" => $chaussure['prix'],
                        "quantite" => $chaussure['quantite']
                    ]);

                    DB::table('chaussure')->delete([]);

                    // Chaussure::

                    // Facture::create([]);

                    return redirect()->route('panier.remove', $key);
                }
            });


            // $commande_id = Commande::getPdo()->lastInsertId();


            return redirect()->route('index')->with('success', 'Votre commande a bien été soumise. Vous recevrez un mail dans quelques instants');
        } else {
            return redirect()->route('commande.precommande')->with('success', 'Une erreur s\'est produite lors de la soummission de votre commande');
        }
    }


    public function telechargerFacture($commande_id)
    {
        $commande = Commande::find($commande_id);

        $date_commande = date('jS F Y', strtotime($commande->date_commande));

        $pdf = PDF::loadView('front.includes.facture_template', array('commande' => $commande));

        return $pdf->download('Facture_' . config('app.name') . '_Facture_No # ' . $commande_id . ' Date_' . $date_commande . '.pdf');
    }
}
