<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function telaInicial(){
        return view ('user.index');
    }

}

//      index:
//<section id="conteudo-view", class="login">
//{!! Form::open(['route' => 'user.index', 'method' => 'post']) !!}

//{!! Form::close() !!}
//</section>