<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index']);

Route::get('/produtos', [ProdutoController::class, 'products']);

Route::get('/produtos/{código}/editar', [ProdutoController::class, 'edit']);

Route::get('/produtos/{código}', [ProdutoController::class, 'PesquisarProdutoPeloCódigo']);

Route::post('/', [ProdutoController::class, 'store']);

Route::patch('/produtos/atualizar', [ProdutoController::class, 'atualizar']);

Route::delete('/produtos/deletar', [ProdutoController::class, 'deletar']);



