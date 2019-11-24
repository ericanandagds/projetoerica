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
 
    public function novo() {
        return view('pizza');
    }

    public function salvar(Request $request) {
        $request->validate([
            'nome'  => 'required',
            'tamanho'=> 'required',
            'sabor' => 'required',
            'pagamento'=> 'required',
             
        ]);
        Pedidos::create($request->all());

        return redirect()->route('pizza')->with('acao', 'Cadastrado com sucesso');
        }

    public function listar() {
        $dados['pedidos'] = Pedidos::all();
        return view('pizza', $dados);
    }

    public function editar($id) {
        $dados = ['pedidos'];
        
        return view('pizza', $dados);
    }
    
    public function atualizar(Request $request) {
        $request->validate([
            'nome'  => 'required',
            'tamanho'=> 'required',
            'sabor' => 'required',
            'pagamento'=> 'required',
        ]);

        return redirect()->route('pizza')->with('acao', 'Atualizado com sucesso');
    }

    public function visualizar($id) {
        $dados =['pedidos'];        
         return view('livros.visualizar', $dados);
    }

    public function excluir($id) {
     
        return redirect()->route('pizza')->with('acao', 'Excluído com sucesso');
    }
}

       
    

