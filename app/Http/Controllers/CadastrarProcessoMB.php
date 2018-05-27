<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\models\Processo;

class CadastrarProcessoMB extends Controller
{
    public function cadastro(Request $request){
        $request->validate([
            'titulo' => 'required',
            'numero' => 'required',            
            'assunto' => 'required',
            'valorCausa' => 'required',
            'faseProcessual' => 'required',
            'dataInicio' => 'required'
            //'advogado' => 'required',
            //'juiz' => 'required',
            //'testemunha' => 'required',
        ]);

        $processo = new Processo;
        $processo->titulo = $request->titulo;
        $processo->numero = $request->numero;
        $processo->assunto = $request->assunto;
        $processo->valorCausa = $request->valorCausa;
        $processo->faseProcessual = $request->faseProcessual;
        $processo->dataInicio = $request->dataInicio;
        $processo->save();

    }

    public function CadastrarProcesso(){
        return view('processos.cadastrarProcesso');
    }

    
}
