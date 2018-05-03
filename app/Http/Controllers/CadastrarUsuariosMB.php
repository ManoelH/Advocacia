<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarUsuariosMB extends Controller
{
    public function cadastrarUsuario(){
        return view('user.cadastrarUsuarios'); 
    }
}
