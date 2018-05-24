<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarProcessoMB extends Controller
{
    public function CadastrarProcesso(Request $request){
        return view('processos.cadastrarProcesso');
    }
}
