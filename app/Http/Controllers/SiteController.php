<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Gustavo';
        $habits = ['Ler', 'Correr', 'Jogar', 'Viajar'];
        return view('home', ['name' => $name, 'habits' => $habits]);
    }
}
