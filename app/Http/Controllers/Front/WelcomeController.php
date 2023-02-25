<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Chaussure;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $chaussures = DB::table('chaussures')->get();
        $categories = DB::table('categories')->get();

        return view('front.index', compact('chaussures', 'categories'));
    }
}
