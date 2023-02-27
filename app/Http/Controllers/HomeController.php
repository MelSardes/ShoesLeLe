<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
//     public function showLoginForm()
// {
//     return view('auth.login');
// }

    public function index()
    {
        return view('home');
    }
    
    public function show()
    {
        $chaussures = DB::table('chaussures')->get();
        $categories = DB::table('categories')->get();

        return view('home', compact('chaussures', 'categories'));
    }
}
