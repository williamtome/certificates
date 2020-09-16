@extends('layouts.app')

@section('content')

    <h3>Listagem de Templates dos Certificados</h3>
    <br>

    <a href="{{route('template.create')}}" class="btn btn-primary pull-right">Novo Template</a>

    <a href="{{route('home')}}" class="btn btn-default"> Voltar</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Título</th>
            <th>Fotos</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        {{-- @foreach($cities as $city)
            <tr>
                <td>{{ $city->name }}</td>
                <td>{{ $city->state->name }}</td>
                <td>
                    <a href="{{ route('city.edit', $city->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach --}}
        </tbody>
    </table>

@endsection
