@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <h3> Editar diretor: {{$director->name}}</h3>
        </div>
    </div>

    <div class="container">
        <form method="POST" action="{{ route('directors.update', ['director' => $director->id]) }}">

            <input type="hidden" name="_method" value="PUT"/>

            @csrf

            <div class="form-group">

                <input type="text" class="form-control" name="name" value="{{$director->name}}" required></br>
                <textarea class="form-control" name="name" value="" required>{{ $director->name }}</textarea></br>

                <button type="submit" class="btn btn-success ribbon">Atualizar</button>
            </div>
        </form>

        @if(count($errors))
            <div class="alert alert-primary" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
