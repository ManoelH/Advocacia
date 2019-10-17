<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Usuario;

class UsuariosMB extends Controller
{
    public function abrirTelaCadastrarUsuario(){
        return view('user.cadastrarUsuarios'); 
    }

    public function cadastrarUsuario(Request $request){
        $request->validate([
            'usuario' => 'required',
            'senha' => 'required',
            'tipoUsuario' => 'required|numeric'
        ]);

        $usuario = new Usuario;
        $usuario->nome = $request->usuario;
        $usuario->tipo = $request->tipoUsuario;
        $usuario->senha = $request->senha;
        $usuario->save();
        return view('user.cadastrarUsuarios');
    }
}
