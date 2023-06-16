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
    <a class="btn btn-primary" href="{{ url('/produtos' . '/' . $produto->código . '/editar') }}">Editar</a>
    <form action="{{ url('/produtos/deletar') }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <input type="hidden" name="código" value="{{ $produto->código }}">
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
</div>
   
@endforeach

<a class="voltar" href="/">Voltar</a>
@endsection

@section('modals')

@if(session('success-delete'))
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Produto Deletado com Sucesso</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        @if(session('success-delete'))
        $('#successModal').modal('show');
        @endif

        $('#successModal').on('hidden.bs.modal', function() {
            // Redirecionar para a página de produtos após fechar o modal
            window.location.href = '/produtos';
        });
    });
</script>
@endsection
