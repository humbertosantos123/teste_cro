@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique a caixa de entrada do seu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Email de recuperação de senha foi enviado para sua caixa de entrada') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar verifique sua caixa de entrada') }}
                    {{ __('Se você não recebeu o email de recuperação') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para enviar um novo email de recuperação') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
