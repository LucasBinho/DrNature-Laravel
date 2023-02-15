@extends('layouts.main')

@section('title', 'Teste Técnico Doutor Nature')

@section('content')

<h1>Lista de Produtos:</h1>

@foreach ($produtos as $produto)
    <p>Código do Produto: {{ $produto->código }}</p>
    <p>Nome do Produto: {{ $produto->nome }}</p>
    <p>Descrição: {{ $produto->descrição }}</p>
    <p>Preço: {{ $produto->preço }}</p>
    <br>
@endforeach

<a href="/">Voltar</a>

@endsection