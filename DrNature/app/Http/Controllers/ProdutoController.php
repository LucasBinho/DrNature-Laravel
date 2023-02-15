<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {

        
        return view('welcome');
    }

    public function products() {

        $produtos = Produto::all();


        return view('produtos',['produtos' => $produtos]);
    }

    public function store(Request $request) {

        $produto = new Produto;

        $produto->código = $request->código;
        $produto->nome = $request->nome;
        $produto->descrição = $request->descrição;
        $produto->preço = $request->preço;

        $produto->save();

        return redirect('/produtos');

    }

    public function PesquisarProdutoPeloCódigo($código) {
        $produto = Produto::where('código', '=', $código)->get();

        return response()->json(['produto' => $produto]);
    }
}
