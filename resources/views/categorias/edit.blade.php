@extends('layout.app')

@section('body')

    <div class="card boder">
        <div class="card-body">
            <form action="{{ route('categorias_atualizar', ['id' => $categoria->id])}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nome">Nome da categorias</label>
                    <input required type="text" class="form-control" name="nome" id="nome" value="{{$categoria->nome}}"
                           placeholder="Nome da categoria">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="{{ route('categorias_index', ['id' => $categoria->id]) }}" class="btn btn-danger btn-sm">
                    Cancelar
                </a>
            </form>
        </div>
    </div>

@endsection
