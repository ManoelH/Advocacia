<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class TelaPrincipalMB extends Controller
{
    //
    public function logar(Request $request){

        if($request->Usuario =='Manoel' && $request->Senha == '1234'){
            return view ('pageMain');
        }
        else
            return redirect()->back()->with('Erro', 'Usuário ou senha incorretos');
            
    }

    public function sair(){
        return redirect()->action('TelaInicialMB@telaInicial');
    }

}
