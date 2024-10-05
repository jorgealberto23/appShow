<?php

use App\Http\Controllers\EventosController;
use Illuminate\Support\Facades\Route;

//Para visualizar as páginas
Route::get('/',[EventosController::class,'MostrarHome'])->name('home-adm');
Route::get('/cadastro-evento',[EventosController::class,'MostrarCadastroEvento'])->name('show-cadastro-evento');
Route::get('/lista-evento',[EventosController::class,'MostrarEventoNome'])->name('lista-evento');
Route::get('/altera-evento/{id}',[EventosController::class,'MostrarEventoCodigo'])->name('show-altera-evento');

//para cadastrar
Route::post('/cadastro-evento',[EventosController::class, 'CadastrarEventos'])->name('cadastra-evento');

//Para deletar
Route::delete('/apaga-evento/{id}',[EventosController::class, 'Destroy'])->name('apaga-evento');

//para alterar
Route::put('/altera-evento/{id}',[EventosController::class, 'Update'])->name('altera-evento');