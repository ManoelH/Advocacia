<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\models\Usuario;

class TelaPrincipalMB extends Controller
{
    //
    public function logar(Request $request){
        $usuario = Usuario::where('nome', $request->Usuario)->where('senha', $request->Senha)->first();
        if($usuario!=null){
            session(['usuario'=> $usuario]);
            return view ('pageMain');
        }
        else
            return redirect()->back()->with('Erro', 'Usuário ou senha incorretos');
    }

    public function sair(Request $request){
        $request->session()->flush();
        return redirect()->route('telaInicial'); //action('TelaInicialMB@telaInicial');
    }

    public function home(){
        return redirect()->action('TelaPrincipalMB@logar');
    }

    public function principal(){
        return view ('pageMain');
    }
}
