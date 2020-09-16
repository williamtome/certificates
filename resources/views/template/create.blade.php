@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Novo Template</div>

        <div class="card-body">
            <form method="POST" action="{{route('template.store')}}" enctype="multipart/form-data">
                @include('template._form')
                <button class="btn btn-primary">Cadastrar</button>
                <a href="{{route('template.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
