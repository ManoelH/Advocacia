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

    //PROCESSOS NÃO ARQUIVADOS
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
        return redirect()->route('cadProcesso');
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
        $processo = null;
        $processos = Processo::where('concluido',false)->orderBy('titulo')->get();
       return view('processos.listarProcessos', compact('processos', 'processo'));
    }

    public function editarProcesso(Request $request){
            $processos = Processo::where('id', $request->id)->update($request->all());
            return redirect()->route('listaProcessos');        
    }

    public function CadastrarProcesso(){
        return view('processos.cadastrarProcesso');
    }

    public function excluir($id){
        Processo::destroy($id);
        return redirect()->route('listaProcessos');
    }

    public function arquivarProcesso(Request $request){
        $processos = Processo::find($request->id);
        $processos->concluido = true;
        $processos->save(); 
        return redirect()->route('listaProcessos');        
}

//PROCESSOS ARQUIVADOS
    public function listaProcessosArquivado(){
        $processo = null;
        $processos = Processo::where('concluido',true)->orderBy('titulo')->get();
    return view('processos.listarProcessosArquivados', compact('processos', 'processo'));
}
    public function reabrirProcesso(Request $request){
        $processos = Processo::find($request->id);
        $processos->concluido = false;
        $processos->save(); 
        return redirect()->route('processosArquivados'); 
}
    public function excluirArquivado($id){
        Processo::destroy($id);
        return redirect()->route('processosArquivados');
}

}