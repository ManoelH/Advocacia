<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ClienteFisico;

class ClienteFisicoMB extends Controller
{
    //
    public function abrirTelaCadastroClienteFisico(Request $request){
        return view ('clientes.cadastrarClienteFisico');
    }

    public function cadastrarClienteFisico(Request $request){
        $request->validate([
            'cep' => 'numeric',
            'cpf' => 'numeric',
            'rg' => 'numeric',
            'foto' => 'image|max:5120'
        ]);
        $request->foto->store('public/upload');
        $clienteFisico = new ClienteFisico;
        $clienteFisico->nome = $request->cliente;
        $clienteFisico->cep = $request->cep;
        $clienteFisico->telefone = $request->telefone;
        $clienteFisico->cpf = $request->cpf;
        $clienteFisico->ctps = $request->ctps;
        $clienteFisico->pis_pasep = $request->pispasep;
        $clienteFisico->serie = $request->serie;
        $clienteFisico->cidade = $request->cidade;    
        $clienteFisico->rua = $request->rua; 
        $clienteFisico->numero = $request->numero;
        $clienteFisico->dataNascimento = $request->dataNascimento;
        $clienteFisico->rg = $request->rg;
        $clienteFisico->estadoCivil = $request->estadoCivil;
        if(!is_null($clienteFisico->conjugue)){
            $clienteFisico->conjugue = $request->conjugue;
            $clienteFisico->certidao_casamento = $request->certidaoCasamento;
        }
        $clienteFisico->uf = $request->uf;
        $clienteFisico->ufCtps = $request->ufCtps;
        $clienteFisico->save();   
        return view ('clientes.cadastrarClienteFisico');
    }
}
