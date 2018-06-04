<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\models\Processo;
use Illuminate\Support\Facades\DB;

class ProcessoMB extends Controller
{
    public function cadastro(Request $request){
        $this->validate($request,[
            'titulo' => 'required',
            'numero' => 'required',            
            'assunto' => 'required',
            'valorCausa' => 'required',
            'faseProcessual' => 'required',
            'dataInicio' => 'required',
            'cliente' => 'required'
        ]);
        echo 'PROCESSO CADASTRADO COM SUCESSO!';
        $processo = new Processo;
        $processo->titulo = $request->titulo;
        $processo->numero = $request->numero;
        $processo->assunto = $request->assunto;
        $processo->cliente = $request->cliente;
        $processo->reu = $request->reu;
        $processo->advogado = $request->advogado;
        $processo->juiz = $request->juiz;
        $processo->testemunha1 = $request->testemunha1;
        $processo->testemunha2 = $request->testemunha2;
        $processo->testemunha3 = $request->testemunha3;
        $processo->valorCausa = $request->valorCausa;
        $processo->faseProcessual = $request->faseProcessual;
        $processo->dataInicio = $request->dataInicio;
        $processo->save();
        // echo $request->assunto;
        // DB::table('processos')->insert([
        //     'titulo' =>  $request->titulo, 
        //     'numero' => $request->numero,
        //     'assunto' => $request->assunto,
        //     'valorCausa' => $request->valorCausa,
        //     'faseProcessual' => $request->faseProcessual,
        //     'dataInicio' => $request->dataInicio,
        //     'cliente' => $request->cliente,
        //     'reu' => $request->reu,
        //     'advogado' => $request->advogado,
        //     'juiz' =>$request->juiz,
        //     'testemunha1' =>$request->testemunha1,
        //     'testemunha2' =>$request->testemunha2,
        //     'testemunha3' =>$request->testemunha3,
        //     ]);
         
        // return view('processos.cadastrarProcesso');

    }

    public function listarProcessos(){
        $processos = Processo::where('concluido',false)->orderBy('titulo')->get();
        $conta = $processos->count();
       return view('processos.listarProcessos', compact('processos', 'conta'));
    }

    public function CadastrarProcesso(){
        return view('processos.cadastrarProcesso');
    }



    
}
