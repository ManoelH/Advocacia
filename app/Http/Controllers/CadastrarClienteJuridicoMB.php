<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ClienteJuridico;

class CadastrarClienteJuridicoMB extends Controller
{
    public function cadastrarClienteJ(){
        return view ('clientes.cadastrarClienteJuridico');
    }

    public function CadastroJ(Request $request){

        $request->validate([
            'cep' => 'numeric',
            'cnpj' => 'numeric',
            'foto' => 'image|max:5120'
        ]);
        $request->foto->store('public/upload');
        $clienteJ = new ClienteJuridico;
        $clienteJ->nomeFantasia = $request->nomeFantasia;
        $clienteJ->cep = $request->cep;
        $clienteJ->areaAtuacao = $request->areaAtuacao;
        $clienteJ->telefone = $request->telefone;
        $clienteJ->cnpj = $request->cnpj;
        $clienteJ->razaoSocial = $request->razaoSocial;
        $clienteJ->cidade = $request->cidade;
        $clienteJ->rua = $request->rua;
        $clienteJ->numero = $request->n;    
        $clienteJ->save();   
        return redirect()->route('cadClienteJuridico');  
         //$estancia=CadastrarClienteJuridicoMB::valida($request); 
        
    }
    
}
