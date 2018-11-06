@extends('layout.app')

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Página de categorias</h5>
            <table class="table table-ordered table-hover">
                <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-left" style="width: 70%">Categoria</th>
                    <th class="text-right">Ações</th>
                </tr>
                </thead>
                <tbody>
                @if(count($categorias) > 0)
                    @foreach($categorias as $categoria)
                        <tr>
                            <td class="text-center">{{ $categoria->id }}</td>
                            <td class="text-left">{{ $categoria->nome }}</td>
                            <td class="text-right">
                                <a href="{{ route('categorias_editar', ['id' => $categoria->id]) }}"
                                   class="btn btn-warning btn-sm">Editar</a>
                                <a href="{{ route('categorias_excluir', ['id' => $categoria->id]) }}"
                                   class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Não tem porra nenhuma aqui seu animal</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('categorias_cadastro') }}" class="btn btn-primary btn-sm">Adicionar catergoria</a>
        </div>
    </div>

@endsection
