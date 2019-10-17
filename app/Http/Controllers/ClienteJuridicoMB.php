<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ClienteJuridico;

class ClienteJuridicoMB extends Controller
{
    public function abrirTelaCadastroCadastrarClienteJuridico(){
        return view ('clientes.cadastrarClienteJuridico');
    }

    public function cadastrarClienteJuridico(Request $request){

        $request->validate([
            'cep' => 'numeric',
            'cnpj' => 'numeric',
            'foto' => 'image|max:5120'
        ]);
        $request->foto->store('public/upload');
        $clienteJuridico = new ClienteJuridico;
        $clienteJuridico->nomeFantasia = $request->nomeFantasia;
        $clienteJuridico->cep = $request->cep;
        $clienteJuridico->areaAtuacao = $request->areaAtuacao;
        $clienteJuridico->telefone = $request->telefone;
        $clienteJuridico->cnpj = $request->cnpj;
        $clienteJuridico->razaoSocial = $request->razaoSocial;
        $clienteJuridico->cidade = $request->cidade;
        $clienteJuridico->rua = $request->rua;
        $clienteJuridico->numero = $request->n;    
        $clienteJuridico->save();   
        return redirect()->route('cadClienteJuridico');  
         //$estancia=CadastrarClienteJuridicoMB::valida($request); 
        
    }
    
}
