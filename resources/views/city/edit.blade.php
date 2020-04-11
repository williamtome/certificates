@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Editar Cidade</div>

        <div class="card-body">
            <form method="POST" action="{{route('city.update', ['city' => $city->id])}}">
                @method('PUT')
                @include('city._form')
                <button class="btn btn-primary">Salvar</button>
                <a href="{{route('city.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
