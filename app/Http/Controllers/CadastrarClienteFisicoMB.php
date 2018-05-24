<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarClienteFisicoMB extends Controller
{
    //
    public function cadastrarClienteF(Request $request){
        return view ('clientes.cadastrarClienteFisico');
    }
}
