<?php

namespace App\Http\Controllers\Front;
use App\Contracts\AttributeContract;
use App\Http\Controllers\Controller;
use App\Models\Chaussure;
use Illuminate\Support\Facades\DB;

class FrontChaussureController extends Controller
{
    public function index() {
        $chaussures = DB::table('chaussures')->get();

        return view('front.categorie', compact('chaussures'));
    }

    public function show(Chaussure $chaussure) {
        // Retourne une vue affichant un élément d'une table
        // dans la base de données en fonction de l'id
        // $chaussure = Chaussure::latest()->get();
        return view("client.detail", compact('chaussure'));
    }
}
