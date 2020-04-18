@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Novo Usuário</div>

        <div class="card-body">
            <form method="POST" action="{{route('user.store')}}">
                @include('user._form')
                <button class="btn btn-primary">Cadastrar</button>
                <a href="{{route('user.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
