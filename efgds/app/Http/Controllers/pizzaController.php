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
 
    public function salvar(Request $request) {
        $request->validate([
            'nome'  => 'required|text',
            'telefone'=> 'required',
            'sabor' => 'required',
            'pagamento'=> 'required'
        ]);

        return redirect()->route('livros.listar')->with('acao', 'Cadastrado com sucesso');
    } 
}
