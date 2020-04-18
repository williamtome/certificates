@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('city.index') }}">Cadastro de Cidades</a></li>
                        <li><a href="{{ route('entity.index') }}">Cadastro de Entidades</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
