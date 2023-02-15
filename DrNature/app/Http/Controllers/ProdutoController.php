<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {

        

        return view('welcome');
    }

    public function products() {



        return view('produtos');
    }
}
