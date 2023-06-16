@extends('layouts.main')

@section('title', 'Teste Técnico Doutor Nature')

@section('content')
<h1>Editar Produto</h1>

<form action="{{ url('/produtos/atualizar') }}" method="post">
    @csrf
    @method('PATCH')
    <div>
        <label for="código">Código do Produto:</label>
        <input readonly name="código" value="{{ $produto->código }}">
    </div>
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}">
    </div>
    <div>
        <label for="descrição">Descrição:</label>
        <textarea name="descrição">{{ $produto->descrição }}</textarea>
    </div>
    <div>
        <label for="preço">Preço:</label>
        <input type="text" name="preço" value="{{ $produto->preço }}">
    </div>
    <button class="btn btn-primary" type="submit">Atualizar</button>
    <input type="button" class="btn btn-primary" onclick="window.location='{{ './../' }}'" value="Voltar">
</form>


@endsection