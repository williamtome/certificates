@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Nova Cidade</div>

        <div class="card-body">
            <form method="POST" action="{{route('city.store')}}">
                @include('city._form')
                <button class="btn btn-primary">Cadastrar</button>
                <a href="{{route('city.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
