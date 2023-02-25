<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FrontChaussureController extends Controller
{
    public function index() {
        $chaussures = DB::table('chaussures')->get();

        return view('front.categorie', compact('chaussures'));
    }
}
