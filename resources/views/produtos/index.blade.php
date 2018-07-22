@extends('layout.master')

@section('conteudo')
    <div class="container">
        <h2>Produtos</h2>
        <p>Crie um novo produto  <a href="{{ url('/produtos/criar') }}"><button class="btn btn-default"><i class="fa fa-plus-square"></i></button></a></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos AS $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>{{$produto->preco}}</td>
                        <td>
                            <a href="{{ url('/produtos/editar/' . $produto->id) }}" title="Editar produto"><button class="btn btn-default"><i class="fa fa-edit"></i></button></a>
                            <a href="{{ url('/produtos/excluir/' . $produto->id) }}" title="Excluir produto"><button class="btn btn-default"><i class="fa fa-close"></i></button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection