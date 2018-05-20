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
Route::group(['prefix' => 'login', 'middleware'=>['login']], function() {
    Route::post("/principal", "TelaPrincipalMB@logar")->name('logar');
});


//rotas de cadastro
Route::group(['prefix' => 'cadastro', 'middleware'=>['login']], function() {
    Route::get("/cadastrarClienteFisico", "CadastrarClienteFisicoMB@cadastrarClienteF")->name('cadClienteFisico');
    Route::get("/cadastrarClienteJuridico", "CadastrarClienteJuridicoMB@cadastrarClienteJ")->name('cadClienteJuridico');
    Route::post("/cadastro", "CadastrarClienteJuridicoMB@CadastroJ")->name('cad');    
    Route::get("/cadastrarUsuario", "CadastrarUsuariosMB@cadastrarUsuario")->name('cadUsuario');
});


