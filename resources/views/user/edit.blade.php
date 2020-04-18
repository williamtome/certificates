@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Editar Entidade</div>

        <div class="card-body">
            <form method="POST" action="{{route('user.update', ['user' => $user->id])}}">
                @method('PUT')
                @include('user._form')
                <button class="btn btn-primary">Salvar</button>
                <a href="{{route('user.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
