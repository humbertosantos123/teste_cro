@extends('layouts.app')

@section('content')
    <div class="container">
        @if($errors->count())
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-danger text-center">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-5 ">
                <form method="POST" action="{{ route('address.register') }}">
                    @csrf

                    @if(session()->has('status'))
                        {{ session('status') }}
                    @endif
                    <div class="form-group">
                        <label for="zip-code">CEP</label>
                        <input class="form-control" name="zip-code" type="text" id="zip-code" value="{{old('zip-code')}}" maxlength="9"
                               onblur="pesquisacep(this.value);" >
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="number">Numero</label>
                        <input type="text" class="form-control" name="number" id="number" value="{{old('number')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="complement">Complemento</label>
                        <input type="text" class="form-control" name="complement" id="complement" value="{{old('complement')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="neighborhood">Bairro</label>
                        <input type="text" class="form-control" name="neighborhood" id="neighborhood" value="{{old('neighborhood')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" autocomplete="off" name="city" id="city" value="{{old('city')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="state">Estado</label>
                        <input type="text" class="form-control" autocomplete="off" name="state" id="state"  value="{{old('state')}}" required maxlength="2">
                    </div>
                    <div class="col-xs-12 text-right">
                        <button type="submit" class="btn btn-primary">
                            Cadastrar Endereço
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('body-scripts')
    <script src="{{ mix('/js/address.js') }}"></script>
@endpush