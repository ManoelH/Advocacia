<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelaInicialMB extends Controller
{
    public function telaInicial(){
        return view ('user.index');
    }
}
