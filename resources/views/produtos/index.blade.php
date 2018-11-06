@extends('layout.app')

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Página de produtos</h5>
            <table class="table table-ordered table-hover">
                <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-left" style="width: 70%">Categoria</th>
                    <th class="text-right">Ações</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('categorias_cadastro') }}" class="btn btn-primary btn-sm">Adicionar catergoria</a>
        </div>
    </div>

@endsection
