@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <div class="col-8">
                <h5><strong>{{$user->name}}</strong></h5>
            </div>
        </div>
        @if(!Auth::guest())
            <div class="col-4">
                <button class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('user.edit', ['user'=> $user->id])}}">Editar Usuário</a>
                </button>
                <button class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('user.index')}} ">Lista de Usuários</a>
                </button>
            </div>

        @endif
    </div>

    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h5><strong>{{$user->name}}</strong></h5>
                <p>({{$user->email}})</p>
            </div>
            <div class="card-body">
                <p class="text-muted">({{$user->document}}) </p>
                <p class="text-muted">({{date('d/m/Y', strtotime($user->birthday))}}) </p>
                <a href="{{route('user.show', ['user'=>$user->id])}}" class="btn btn-success">
                    Visualizar
                </a>
                <a href="{{route('user.show', ['user'=>$user->id])}}" class="btn btn-danger">
                    Deletar
                </a>
            </div>
        </div>
    </div>

@endsection
