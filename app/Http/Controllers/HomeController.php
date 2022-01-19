<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Função que apresentará a página index
    public function index()
    {
        return view('index');
    }
    
    public function pokemon($nome)
    {
        return view('pokemon', compact('nome'));
    }
    
}
