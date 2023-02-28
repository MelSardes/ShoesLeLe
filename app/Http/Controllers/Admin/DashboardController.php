<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class DashboardController extends Controller
{
    public function index()
    {
        $categories=Categorie::latest()->get();
        return view('admin.dashboard', compact('categories'));
    }
    public function connexion()
    {
        
        return view('auth.admin.login');
    }
}
