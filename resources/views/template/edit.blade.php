@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Editar Template</div>

        <div class="card-body">
            <form method="POST" action="{{route('template.update', ['template' => $template->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @include('template._form')
                <button class="btn btn-primary">Salvar</button>
                <a href="{{route('template.index')}}" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>


@endsection
