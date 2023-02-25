<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Chaussure;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index() {
        $chaussures = DB::table('chaussures')->get();
        $categories = DB::table('categories')->get();

        return view('welcome', compact('chaussures','categories'));
        // $chaussures=Chaussure::latest()->get();
        // $categories=Categorie::latest()->get();
        // return view('welcome', compact('categories', 'chaussures'));
    }
}
