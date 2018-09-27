@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">

        <div class="row">
            <div class="col-8">
                <h5 style="font-family: 'Anton', sans-serif;">
                    <strong>{{ $director->name }} (- id: {{ $director->id }})</strong>
                </h5>
            </div>


            <div class="col-4">

                @if(!Auth::guest())
                    <button class="btn btn-success ribbon">
                        <a style="color:white;" href="{{route('directors.edit', ['director' => $director->id])}}">
                            Editar Diretor
                        </a>
                    </button>
                @endif
                <button class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('directors.index')}} "> Lista de diretores</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="card-body">

            <p>{{ $director->information }}</p>
            <ul class="list-group-item disabled">
                <h5>Filmes do diretor</h5>
                @foreach($director->movies as $movie)
                    <li class="list-group-item">
                        Titulo:<p>{{$movie->title}}</p>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>


@endsection
