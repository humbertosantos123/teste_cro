@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <h3> Diretores</h3>
            @if(!Auth::guest())
                <button type="button" style="float:none;" class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('directors.create')}}">Criar diretor</a>
                </button>
            @endif
        </div>
    </div>
    </br>
    <div class="container">

        <ul class="list-group-item disabled">
            @foreach ($directors as $director)
                <li class="list-group-item">
                    {{ $director->name}}
                    </br>

                    <a href="{{ route('directors.show', ['director' => $director]) }}" class="btn btn-success ribbon">Visualizar</a></br>
                </li>

            @endforeach
        </ul>

    </div>
    </br>

    </div>

@endsection
