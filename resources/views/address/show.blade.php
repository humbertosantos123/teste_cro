@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <div class="col-8">
                <h5><strong>{{$address->address}}</strong></h5>
            </div>
        </div>
        @if(!Auth::guest())
            <div class="col-4">
                <button class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('address.edit', ['address'=> $address->id])}}">Editar Endereço</a>
                </button>
                <button class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('address.index')}} ">Lista de Endereços</a>
                </button>
            </div>

        @endif
    </div>

    <div class="container">
        <div class="card-header">
            <h5><strong>{{$address->zip_code}}</strong></h5>
            <p>({{$address->address}} - {{$address->number}})</p>
            <p>{{$address->complement}}</p>
        </div>
        <div class="card-body">
            <p class="text-muted">({{$address->neighborhood}}) </p>
            <p class="text-muted">({{$address->city}}) </p>
            <p class="text-muted">({{$address->state}}) </p>
            <a href="{{route('address.show', ['movie'=>$address->id])}}" class="btn btn-success">
                Visualizar
            </a>
        </div>
    </div>

    </div>

@endsection
