<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ClienteFisico;

class CadastrarClienteFisicoMB extends Controller
{
    //
    public function cadastrarClienteF(Request $request){
        return view ('clientes.cadastrarClienteFisico');
    }

    public function cadastro(Request $request){
        $request->validate([
            'cep' => 'numeric',
            'cpf' => 'numeric',
            'rg' => 'numeric',
            'foto' => 'image|max:5120'
        ]);
        $request->foto->store('public/upload');
        $clienteF = new ClienteFisico;
        $clienteF->nome = $request->cliente;
        $clienteF->cep = $request->cep;
        $clienteF->telefone = $request->telefone;
        $clienteF->cpf = $request->cpf;
        $clienteF->ctps = $request->ctps;
        $clienteF->pis_pasep = $request->pispasep;
        $clienteF->serie = $request->serie;
        $clienteF->cidade = $request->cidade;    
        $clienteF->rua = $request->rua; 
        $clienteF->numero = $request->numero;
        $clienteF->dataNascimento = $request->dataNascimento;
        $clienteF->rg = $request->rg;
        $clienteF->estadoCivil = $request->estadoCivil;
        $clienteF->conjugue = $request->conjugue;
        $clienteF->certidao_casamento = $request->certidaoCasamento;
        $clienteF->uf = $request->uf;
        $clienteF->ufCtps = $request->ufCtps;
        $clienteF->save();   
        return view ('clientes.cadastrarClienteFisico');
    }
}
