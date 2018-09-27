@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <div class="col-8">
                <h5><strong>{{$movie->title}}</strong></h5>
            </div>
        </div>
        @if(!Auth::guest())
            <div class="col-4">
                <button class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('movies.edit', ['movie'=> $movie->id])}}">Editar filme</a>
                </button>
                <button class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('movies.index')}} ">Lista de filmes</a>
                </button>
            </div>

        @endif
    </div>
    
    <div class="container">
        <div class="card">
            <div class="col-3">
                <img class="img-fluid" alt="Responsive image" width="500;" height="300" src="{{$movie->picture}}">
            </div>
            </br>

            <div class="col-9">
                <div class="card">
                    <ul class="list-group-item disabled">
                        <li class="list-group-item" src="{{$movie->picture}}">
                            <strong>Imagem: </strong>{{$movie->picture}}</li>
                        <li class="list-group-item">
                            <strong>Descrição: </strong>{{$movie->description}}</li>
                        <li class="list-group-item">
                            <strong>Duração: </strong>{{$movie->runtime}} minutos
                        </li>
                        <li class="list-group-item">
                            <strong>Diretor:</strong>{{$movie->director->name}}
                        </li>
                    </ul>
                    @if(!Auth::guest())
                    @endif

                </div>
                </br>
            </div>
        </div>

    </div>

@endsection
