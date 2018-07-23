@extends('layout.master')

@section('conteudo')

    <div class="container-fluid pb-video-container">
        <h3 class="text-center">Adicione um produto</h3>

        <form id="formExemplo" method="post" action="{{url('/produtos/store')}}">

            {!! csrf_field() !!}

            <div class="form-group">
                <label class="control-label">Nome:</label>
                <input id="textNome" required name="nome" class="form-control" placeholder="Digite o Nome..." type="text">
            </div>

            <div class="form-group">
                <label class="control-label">Quantidade:</label>
                <input id="inputQuantidade" required class="form-control" placeholder="Digite a quantidade" type="text" name="quantidade">
            </div>

            <div class="form-group">
                <label class="control-label">Preço:</label>
                <input type="number" step="any" required class="form-control" id="inputPreco" placeholder="Digite o preço..." name="preco">
            </div>

            <div class="form-group">
                <label for="inputDescricao" class="control-label">Descrição:</label>
                <textarea class="form-control" required name="descricao"></textarea>
            </div>

            <a href="javascript:history.back()">
                <button type="button" class="btn btn-danger">Voltar</button>
            </a>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection