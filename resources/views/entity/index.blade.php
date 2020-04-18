@extends('layouts.app')

@section('content')

    <h3>Listagem de Entidades</h3>
    <br>

    <a href="{{route('entity.create')}}" class="btn btn-primary pull-right">Nova Entidade</a>

    <a href="{{route('home')}}" class="btn btn-default">Voltar</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Prefixo</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($entities as $entity)
            <tr>
                <td>{{ $entity->prefix }}</td>
                <td>{{ $entity->name }}</td>
                <td>
                    <a href="{{ route('entity.edit', $entity->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
