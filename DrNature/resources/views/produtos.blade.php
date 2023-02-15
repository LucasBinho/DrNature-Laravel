@extends('layouts.main')

@section('title', 'Teste Técnico Doutor Nature')

@section('content')

<h1 class="produtosTitulo mt-5">Lista de Produtos:</h1>

@foreach ($produtos as $produto)
<div id="product-container" class="col-md-6 offset-md-3 mt-5">
    <p>Código do Produto: {{ $produto->código }}</p>
    <p>Nome do Produto: {{ $produto->nome }}</p>
    <p>Descrição: {{ $produto->descrição }}</p>
    <p>Preço: {{ $produto->preço }}</p>

</div>
   
@endforeach

<a class="voltar" href="/">Voltar</a>

@endsection