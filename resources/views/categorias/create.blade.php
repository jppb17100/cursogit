@extends('layout.app')

@section('body')

    <div class="card boder">
        <div class="card-body">
            <form action="{{ route('categorias_cadastro_armazenar')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome da categorias</label>
                    <input required type="text" class="form-control" name="nome" id="nome"
                           placeholder="Nome da categoria">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Limpar Campo</button>
            </form>
        </div>
    </div>

@endsection
