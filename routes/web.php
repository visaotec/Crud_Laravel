<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;

/*
   Crud com Laravel 8
   Autor: Isaias Oliveira
   visaotec.com@gmail.com

*/

Route::get('/', HomeController::class)->name('home');

Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');

Route::get('produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');

//Route::get('produtos/{nome}/{valor?}', [ProdutosController::class, 'show'])->name('produtos.descricao');

Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');

Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');

Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');

Route::get('produtos/{produto}/delete', [ProdutosController::class, 'modal'])->name('produtos.modal');

Route::delete('produtos/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::post('painel', [UsuariosController::class, 'login'])->name('usuarios.login');

Route::get('/', [UsuariosController::class, 'logout'])->name('usuarios.logout');
