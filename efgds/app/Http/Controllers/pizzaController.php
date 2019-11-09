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
        return view('livros.cadastro');
    }

    public function salvar(Request $request) {
        $request->validate([
            'email'  => 'required',
            'senha'=> 'required',
            'endereco' => 'required',
            'complemento'=> 'required',
            'cidade'=> 'required',
            'estado'=>'required',
            'cep'=> 'required|integer' 
        ]);
        Cadastro::create($request->all());

        return redirect()->route('cadastro')->with('acao', 'Cadastrado com sucesso');
        }

    public function listar() {
        $dados['cadastro'] = Cadastro::all();
        return view('cadastro', $dados);
    }

    public function editar($id) {
        $dados = ['cadastro'];
        
        return view('livros.edicao', $dados);
    }
    
    public function atualizar(Request $request) {
        $request->validate([
            'isbn'  => 'required|integer',
            'titulo'=> 'required',
            'autor' => 'required',
            'resumo'=> 'required'
        ]);

        return redirect()->route('livros.listar')->with('acao', 'Atualizado com sucesso');
    }

    public function visualizar($id) {
        $dados = ['livro' => [
                    'id'        => 1,
                    'titulo'    => 'Titulo 1',
                    'autor'     => 'Autor 1',
                    'resumo'    => 'Bla bla bla bla bla bla'
                ]
        ];
        return view('livros.visualizar', $dados);
    }

    public function excluir($id) {
     
        return redirect()->route('livros.listar')->with('acao', 'Excluído com sucesso');
    }
}

       
    

