@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <h3>Lista de Usuários</h3>
        </div>
    </div>
    </br>

    <div class="container">
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-3">
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
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

@endsection
