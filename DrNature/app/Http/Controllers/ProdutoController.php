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

    public function store(Request $request)
    {
        $request->validate([
            'código' => 'required|unique:produtos',
            'nome' => 'required',
            'descrição' => 'required',
            'preço' => 'required',
        ]);
    
        $produto = new Produto;
    
        $produto->código = $request->código;
        $produto->nome = $request->nome;
        $produto->descrição = $request->descrição;
        $produto->preço = $request->preço;
    
        $produto->save();
    
        return redirect('/produtos');
    }
    

    public function edit($código) {
        $produto = Produto::where('código', '=', $código)->first();
        return view('editar')->with('produto', $produto);
    }

    public function atualizar(Request $request)
    {  
    $código = $request->input('código');
    $produto = Produto::where('código', $código)->first();

    if ($produto) {
        $produto->nome = $request->input('nome');
        $produto->descrição = $request->input('descrição');
        $produto->preço = $request->input('preço');
        $produto->save();
        
        // Redirecionar para a página de produtos
        return redirect('/produtos')->with('success', 'Produto atualizado com sucesso!');
    }
    
        // Redirecionar de volta para a página de edição ou exibir uma mensagem de erro
        return redirect()->back()->with('error', 'Produto não encontrado.');
    }

    public function deletar(Request $request) {
       $código = $request->input('código');
       $produto = Produto::where('código', $código)->first();

       if ($produto) {
        $produto->delete();
        return redirect('/produtos')->with('success-delete', 'Produto deletado com sucesso!');
       }


       return redirect('/produtos')->with('error', 'Produto não encontrado!');
    }

    

    public function PesquisarProdutoPeloCódigo($código) {
        $produto = Produto::where('código', '=', $código)->get();

        return response()->json(['produto' => $produto]);
    }
}
