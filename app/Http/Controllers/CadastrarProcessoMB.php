<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\models\Processo;
use Illuminate\Support\Facades\DB;

class CadastrarProcessoMB extends Controller
{
    public function cadastroCaioGayViado(Request $request){
        // $this->validate($request,[
        //     'titulo' => 'required',
        //     'numero' => 'required',            
        //     'assunto' => 'required',
        //     'valorCausa' => 'required',
        //     'faseProcessual' => 'required',
        //     'dataInicio' => 'required'
        // ]);
        //echo $request->titulo;
        // $processo = new Processo;
        // $processo->titulo = $request->titulo;
        // $processo->numero = $request->numero;
        // $processo->assunto = $request->assunto;
        // $processo->valorCausa = $request->valorCausa;
        // $processo->faseProcessual = $request->faseProcessual;
        // $processo->dataInicio = $request->dataInicio;
        // $processo->save();
        // echo $request->assunto;
        DB::table('processos')->insert([
            'titulo' =>  $request->titulo, 
            'numero' => $request->numero,
            'assunto' => $request->assunto,
            'valorCausa' => $request->valorCausa,
            'faseProcessual' => $request->faseProcessual,
            'dataInicio' => $request->dataInicio,
            ]);
         
        // return view('processos.cadastrarProcesso');

    }

    public function CadastrarProcesso(){
        return view('processos.cadastrarProcesso');
    }



    
}
