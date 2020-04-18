@extends('layouts.app')

@section('content')

    <h3>Listagem de Usuários</h3>
    <br>

    <a href="{{route('user.create')}}" class="btn btn-primary pull-right">Novo Usuário</a>

    <a href="{{route('home')}}" class="btn btn-default">Voltar</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
