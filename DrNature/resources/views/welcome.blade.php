@extends('layouts.main')

@section('title', 'Teste Técnico Doutor Nature')

@section('content')

<h1>Cadastro de Produtos:</h1>
<form class="form">
    <div class="mb-3">
      <label for="inputCodigo" class="form-label">Código do Produto</label>
      <input type="text" class="form-control" id="inputCodigo">
    </div>
    <div class="mb-3">
        <label for="inputNome" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" id="inputNome">
      </div>
      <div class="mb-3">
        <label for="inputDescricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="inputDescricao" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="inputPreco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="inputPreco">
      </div>
    <a href="/produtos">Enviar</a>
  </form>

@endsection