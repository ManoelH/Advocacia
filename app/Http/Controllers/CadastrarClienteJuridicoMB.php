<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarClienteJuridicoMB extends Controller
{
    public function cadastrarClienteJ(){
        return view ('clientes.cadastrarClienteJuridico');
    }

    public function CadastroJ(Request $request){
        if($request->nomeFantasia !=null && $request->cep !=null && $request->areaAtuacao !=null
        && $request->telefone !=null && $request->cnpj !=null && $request->razaoSocial !=null
        && $request->cidade !=null && $request->rua !=null && $request->n !=null){
         $estancia=CadastrarClienteJuridicoMB::valida($request); 
        }   
    }

    public function valida(Request $request){
        $request->validate([
            'cep' => 'numeric',
            'cnpj' => 'numeric',
            'foto' => 'image|max:2048'
        ]);
        $request->foto->store('public/upload');
            return view ('clientes.cadastro');
    }
    
}
