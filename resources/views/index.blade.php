@extends('layout.app')

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">
                        Cadastro de produtos</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minus similique dolor voluptatibus atque praesentium odit assumenda eius quos ab hic veritatis impedit quam illo ipsam aut, tempora, adipisci sit!
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastrar produto</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">
                        Cadastro de produtos</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minus similique dolor voluptatibus atque praesentium odit assumenda eius quos ab hic veritatis impedit quam illo ipsam aut, tempora, adipisci sit!
                    </p>
                    <a href="/categorias" class="btn btn-primary">Cadastrar catergoria</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection