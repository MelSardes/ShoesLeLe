<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categorie;   
use App\Models\Chaussure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $chaussures = DB::table('chaussures')->get();
        $categories = DB::table('categories')->get();

        return view('front.index', compact('chaussures', 'categories'));
    }

    public function indexConnexion()
    {
        $chaussures = DB::table('chaussures')->get();
        $categories = DB::table('categories')->get();

        return view('front.index2', compact('chaussures', 'categories'));
    }
    public function profil()
    {
        return view('front.account.profil.index');
    }
    public function commande()
    {
        return view('front.account.commande.index');
    }
    public function listeCommande()
    {
        $lignes_commande = DB::table('lignes_commande')->get();
        $categories = DB::table('categories')->get();
        $chaussures = DB::table('chaussures')->get();
        // $query = DB::select( DB::raw("SELECT * FROM tablethis WHERE id = '$chaussures'  ORDER BY 'created_at' ASC"));
        $ok = DB::table('lignes_commande')
            ->join('chaussures', 'lignes_commande.chaussure_id', '=', 'chaussures.id')
            ->join('commandes', 'lignes_commande.commande_id', '=', 'commandes.id')
            ->select('lignes_commande.*')
            ->get();
        return view('front.account.commande.index', compact('lignes_commande','chaussures'));
    }
    public function dashboard()
    {
        $wordlist = DB::table('commandes')->where('client_id', '<=', Auth::user()->id)->get();
        $compter = $wordlist->count() + 1;
        return view('front.dashboard',compact('compter'));
    }

    public function compter(){
        $compter = DB::table('commandes')
                     ->select(DB::raw('count(id)'))
                     ->groupBy('id')
                     ->get();
    }
}
