<?php

namespace App\Http\Controllers\Front;
use App\Contracts\AttributeContract;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Chaussure;
use Illuminate\Support\Facades\DB;

class FrontChaussureController extends Controller
{
    public function index()
    {
        $chaussures = DB::table('chaussures')->get();
        $categories = DB::table('categories')->get();

        return view('front/categorie/index', compact('chaussures', 'categories'));
    }

    public function showAll(Categorie $categorie)
    {
        $categories = DB::table('categories')->get();
        $chaussures = DB::table('chaussures')->get();

        return view('front.categorie.show', compact('chaussures', 'categories', 'categorie'));
    }

    public function show(Chaussure $chaussure)
    {
        return view('front.chaussure', compact('chaussure'));
    }

}
