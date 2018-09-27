@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="card-header">
            <h3 style="font-family: 'Anton', sans-serif;">Lista de Endereços</h3>
            @if(!Auth::guest())
                <button type="button" style="float:none;" class="btn btn-success ribbon">
                    <a style="color:white;" href="{{route('address.register')}} ">Adicionar novo endereço</a>
                </button>
            @endif
        </div>
    </div>
    </br>

    <div class="container">
        <div class="row">
            @foreach($addresses as $address)
                <div class="col-md-3">
                    <div class="card text-center">
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
            @endforeach
        </div>

    </div>

@endsection
