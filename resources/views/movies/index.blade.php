@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <h3 style="font-family: 'Anton', sans-serif;">Lista de filmes</h3>
            @if(!Auth::guest())
                <button type="button" style="float:none;" class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('movies.create')}} ">Criar filme</a></button>
            @endif
        </div>
    </div>
    </br>

    <div class="container">
        <div class="row">

            @foreach($movies as $movie)
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5><strong>{{$movie->title}}</strong></h5>
                            <p>({{$movie->releaseDate}})</p>
                            @for($i = 1; $i <= 5; $i++)
                                <i class="{{ $i <=  $movie->rating ? 'fas fa-star' : 'far fa-star'}} no-border"></i>
                            @endfor
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" alt="Responsive image" width="200" height="250"
                                 src="{{$movie->picture}}"></br>
                            <p class="text-muted">({{$movie->description}}) </p>
                            <a href="{{route('movies.show', ['movie'=>$movie->id])}}" class="btn btn-success">
                                Visualizar
                            </a>

                            <form action="{{ route('movies.delete', ['movie' =>$movie->id]) }}" method="post">
                                <input type="hidden" name="_method" value="PUT"/>
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2">Deletar</button>
                            </form>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

@endsection
