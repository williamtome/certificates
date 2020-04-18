@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Nova Entidade</div>

        <div class="card-body">
            <form method="POST" action="{{route('entity.store')}}">
                @include('entity._form')
                <button class="btn btn-primary">Cadastrar</button>
                <a href="{{route('entity.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
