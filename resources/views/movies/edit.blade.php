@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2">
        <h1> Editar filme: {{$movie->title}} aqui</h1> </br>
    </div>

    <form method="POST" action="{{route('movies.update', ['movie' => $movie->id])}}">

        @csrf
        <div class="container">
            <input type="hidden" name="_method" value="put">

            <div class="form-group">
                Link da capa do filme:</br>
                <input type="url" name="picture" class="form-control" value="{{$movie->picture}}"
                       placeholder="Link da capa do filme">
            </div>

            <div>
                Titulo do filme:</br>
                <input type="text" name="title" class="form-control" value="{{$movie->title}}"
                       placeholder="Titulo do filme">
            </div>

            <div>
                Data de lançamento:</br>
                <input type="date" name="releaseDate" class="form-control" value="{{$movie->releaseDate}}">
            </div>

            <div>
                Duração:</br>
                <input type="time" name="runtime" class="form-control" value="{{$movie->runtime}}"
                       placeholder="runtime">
            </div>

            <div>
                Descrição:</br>
                <textarea rows="10" cols="50" class="form-control" name="description"
                          placeholder="Descrição">{{$movie->description}}</textarea>
            </div>

            <!--  Director  -->
            <div>
                Escolha um diretor
                <select name="director">
                    @foreach($directors as $director)
                        <option value="{{ $director->id }}">{{ $director->name }}</option>
                    @endforeach
                </select>
            </div>

            </br>

            <div>
                <input type="submit" class="btn btn-primary" value="Atualizar filme">
            </div>
        </div>
    </form>

@endsection
