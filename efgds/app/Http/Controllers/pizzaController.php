<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pizzaController extends Controller
{
    public function home(){
        return view('pizza');
    }
    public function contato(){
        return view('contato');
    }
    
}
