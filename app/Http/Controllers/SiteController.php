<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Gustavo';
        $habits = ['Ler', 'Correr', 'Jogar', 'Viajar'];
        
        return view('home', compact('name', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
