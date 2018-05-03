<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarClienteFisicoMB extends Controller
{
    //
    public function cadastrarClienteF(){
        return view ('clientes.cadastrarClienteFisico');
    }
}
