@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2">
        <h1> Editar Endereço: {{$address->address}} - {{$address->number}}</h1> </br>
    </div>

    <form method="POST" action="{{route('address.update', ['address' => $address->id])}}">
        <input type="hidden" name="_method" value="PUT"/>
        @csrf
        <div class="container">
            @if(session()->has('status'))
                {{ session('status') }}
            @endif
            <div class="form-group">
                <label for="zip-code">CEP</label>
                <input class="form-control" name="zip-code" type="text" id="zip-code" value="{{$address->zip_code}}" maxlength="9"
                       onblur="pesquisacep(this.value);" >
            </div>
            <div class="form-group">
                <label for="address">Endereço</label>
                <input type="text" class="form-control" name="address" id="address" value="{{$address->address}}" required>
            </div>
            <div class="form-group">
                <label for="number">Numero</label>
                <input type="text" class="form-control" name="number" id="number" value="{{$address->number}}" required>
            </div>
            <div class="form-group">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control" name="complement" id="complement" value="{{$address->complement}}" required>
            </div>
            <div class="form-group">
                <label for="neighborhood">Bairro</label>
                <input type="text" class="form-control" name="neighborhood" id="neighborhood" value="{{$address->neighborhood}}" required>
            </div>
            <div class="form-group">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" autocomplete="off" name="city" id="city" value="{{$address->city}}" required>
            </div>
            <div class="form-group">
                <label for="state">Estado</label>
                <input type="text" class="form-control" autocomplete="off" name="state" id="state"  value="{{$address->state}}" required maxlength="2">
            </div>
            <div class="col-xs-12 text-right">
                <button type="submit" class="btn btn-primary">
                    Atualizar Endereço
                </button>
            </div>
        </div>
    </form>
@endsection

@push('body-scripts')
    <script src="{{ mix('/js/address.js') }}"></script>
@endpush
