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
}
