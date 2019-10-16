<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logar(Request $request){
        if ($request->email == 'teste@teste.com' && $request->senha =='123456')
             return view('pizza'); 
        else 
            return redirect('login');       
       
    }
    public function logout(){
        return redirect('login');
    }

}
