@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <h3>Criar diretor</h3>
        </div>
    </div>

    <div class="container">
        <form method="POST" action="{{ route('directors.store') }}">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome do diretor" name="name" required></br>
                <button type="submit" class="btn btn-success ribbon">Criar</button>
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
