@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Editar Entidade</div>

        <div class="card-body">
            <form method="POST" action="{{route('entity.update', ['entity' => $entity->id])}}">
                @method('PUT')
                @include('entity._form')
                <button class="btn btn-primary">Salvar</button>
                <a href="{{route('entity.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
