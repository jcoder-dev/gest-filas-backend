<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SenhaController;
use App\Http\Middleware\CustomAuth;

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

Route::get('/', function () {
    return view('admin.login');
});
Route::get('/requisitar-senha', function(){
    return view('usuarios.senhas.tela-requisitar-senha');
})->name('requisitar-senha');
Route::get('/escolher-uma-opcao', function(){
    return view('usuarios.senhas.tela-senha');
})->name('selecionar-tipo');


Route::post('/',  [ FuncionarioController::class, 'login'])->name('funcionario.login');
Route::post('/funcionario/logout',  [ FuncionarioController::class, 'logout'])->name('funcionario.logout');

Route::get('/selecionar-servico', function(){
    return view('usuarios.senhas.tela-tipo-servico');
})->name('senha-servico');


Route::get('/requisitar-senha', function(){
    return view('usuarios.senhas.tela-requisitar-senha');
});

Route::get('/pagina-tirar-senha/{idServico}', [SenhaController::class, 'tirarSenha'])->name('pagina-tirar-senha');

Route::get('tela-mostrar-senha', [SenhaController::class, 'mostrarSenha'])->name('mostrar-senha');



Route::post('/gerar-senha', [SenhaController::class, 'gerarSenha'])->name('gerar-senha');

Route::get('/senhas', [SenhaController::class, 'listar'])->name('senhas-listar');


Route::get('/escolher-condicao', function(){
    return view('usuarios.senhas.tela-senha');
})->name('selecionar-tipo');


Route::post('/selecionar-servico', [SenhaController::class, 'selecionarServico'])->name('senha-servico');



Route::middleware([CustomAuth::class])->group(function () {


    // Rotas de Funcionário
Route::get('/funcionario', [FuncionarioController::class, 'index'])->name('gestao-funcionario');
Route::post('/funcionario/adicionar', [FuncionarioController::class, 'adicionar'])->name('adicionar-funcionario');
Route::put('/funcionario', [FuncionarioController::class, 'editar'])->name('editar-funcionario');
Route::get('/deletar-funcionario/{id}', [FuncionarioController::class, 'deletar'])->name('deletar-funcionario');
Route::post('/funcionario', function (){
    return view('usuarios.telas-gestao.funcionario');
})->name('adicionar-usuario');





// Rotas de Serviço

Route::get('/servico', [ServicoController::class, 'index'])->name('gestao-servico');
Route::post('/adicionar-servico', [ServicoController::class, 'adicionar'])->name('adicionar-servico');
Route::get('/deletar-servico/{id}', [ServicoController::class, 'deletar'])->name('deletar-servico');

// Rotas de Balcao
Route::get('/balcao', [FuncionarioController::class, 'index'])->name('gestao-balcao');
Route::get('/adicionar-balcao', function (){
    return view('usuarios.telas-gestao.balcao');
})->name('adicionar-balcao');




// Gestão de Senhas e Filas
Route::get('/dashboard', [SenhaController::class, 'index'])->name('dashboard');

Route::post('/alterar-estado-senha/{codigo}', [SenhaController::class, 'alterarEstado'])->name('alterar.estado');


});







