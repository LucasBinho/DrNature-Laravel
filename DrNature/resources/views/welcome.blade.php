@extends('layouts.main')

@section('title', 'Teste Técnico Doutor Nature')

@section('content')
<div id="form-container" class="col-md-6 offset-md-3 mt-5">
  <h1>Cadastro de Produtos:</h1>
  <form action="/" method="POST" class="form">
    @csrf
      <div class="mb-3">
        <label for="inputCodigo" class="form-label">Código do Produto:</label>
        <input type="text" name="código" class="form-control" id="inputCodigo">
      </div>
      <div class="mb-3">
          <label for="inputNome" class="form-label">Nome do Produto:</label>
          <input type="text" name="nome" class="form-control" id="inputNome">
        </div>
        <div class="mb-3">
          <label for="inputDescricao" class="form-label">Descrição:</label>
          <textarea name="descrição" class="form-control" id="inputDescricao" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="inputPreco" class="form-label">Preço:</label>
          <input type="number" name="preço" class="form-control" id="inputPreco">
        </div>
      <input type="submit" class="btn btn-primary" value="Criar Produto">
      <input type="button" class="btn btn-primary" onclick="window.location='{{ 'produtos' }}'" value="Ver Produtos">
    </form>
</div>


@endsection