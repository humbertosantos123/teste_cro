@extends('layouts/app')
@section('content')

    <div class="p-3 mb-2">
        <h1> Editar Usuário: {{$user->name}}</h1> </br>
    </div>

    <form method="POST" action="{{route('user.update', ['user' => $user->id])}}">
        <input type="hidden" name="_method" value="PUT"/>
        @csrf
        <div class="container">
            @if(session()->has('status'))
                {{ session('status') }}
            @endif
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$user->name}}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('birthday') ? 'is-invalid' : '' }}">
                    <label for="birthday" class="col-md-4  col-form-label text-md-right">Data de Nascimento</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control birthday" value="{{ date('d/m/Y', strtotime($user->birthday))}}" required name="birthday">
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('document') ? 'is-invalid' : '' }}">
                    <label for="document" class="col-md-4  col-form-label text-md-right">CPF</label>
                    <div class="col-md-6">
                        <input type="document" class="form-control document" value="{{ $user->document}}" required name="document">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('atualizar') }}
                        </button>
                    </div>
                </div>
        </div>
    </form>
@endsection

@push('body-scripts')
    <script src="{{ mix('/js/register.js') }}"></script>
@endpush
