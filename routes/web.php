<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/index', ['uses' => 'Controller@telaLogin']);
//Route::post('/index', ['as' =>'user.index', 'uses' => 'Controller@index']);


//tela inicial
Route::get("/", "TelaInicialMB@telaInicial")->name('telaInicial');
Route::post("/", "TelaPrincipalMB@sair")->name('redireciona');

//tela principal
Route::group(['prefix' => 'login'], function() {
    Route::post("/principal", "TelaPrincipalMB@logar")->name('logar');
    Route::get("/principal", "TelaPrincipalMB@principal")->name('home');
});



    //rotas logado
Route::group(['prefix' => 'logado', 'middleware'=>['login']], function() {
    Route::get("/cadastrarClienteFisico", "CadastrarClienteFisicoMB@cadastrarClienteF")->name('cadClienteFisico');
    Route::get("/cadastrarClienteJuridico", "CadastrarClienteJuridicoMB@cadastrarClienteJ")->name('cadClienteJuridico');
    Route::post("/cadastro", "CadastrarClienteJuridicoMB@CadastroJ")->name('cad');    
    Route::get("/cadastrarUsuario", "CadastrarUsuariosMB@cadastrarUsuario")->name('cadUsuario');
    //processos abertos
    Route::get("/cadastrarProcesso", "ProcessoMB@CadastrarProcesso")->name('cadProcesso');
    Route::post("/processoCadastrado", "ProcessoMB@cadastro")->name('processoCadastrado');
    Route::get("/processos", "ProcessoMB@listarProcessos")->name('listaProcessos');
    
    Route::get("/editarProcessos/{id}", "ProcessoMB@editarProcesso")->name('editarProcesso');
    Route::get("/arquivarProcessos/{id}", "ProcessoMB@arquivarProcesso")->name('arquivaProcesso');
    Route::get("/excluirProcesso/{id}", "ProcessoMB@excluir")->name('excluirProcesso');
    //processos arquivados
    Route::get("/processosArquivados", "ProcessoMB@listaProcessosArquivado")->name('processosArquivados');
    Route::get("/reabrirProcessos/{id}", "ProcessoMB@reabrirProcesso")->name('reabrirProcesso');
    Route::get("/excluirProcessoArquivado/{id}", "ProcessoMB@excluirArquivado")->name('excluirProcessoArquivado');
});


