<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Processo;

class CadastrarProcessoMB extends Controller
{
    public function CadastrarProcesso(Request $request){

        $request->validade([
            'nome' => 'required',
            'assunto' => 'required',
            'area-atuacao' => 'required', 
            'telefone' => 'required',
            'cnpj' => 'required',
            'razao-social' => 'required',
            'cidade' => 'required',
            'reu' => 'required',
            'advogado' => 'required',
            'juiz' => 'required',
            'testemunha' => 'required',
            'data-inicio' => 'required'
        ]);

        $processo = new Processo;
//        $processo->
        return view('processos.cadastrarProcesso');
    }
}
