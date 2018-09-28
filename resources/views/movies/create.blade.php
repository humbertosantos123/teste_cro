@extends('layouts/app')
@section('content')

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

    <div class="p-3 mb-2 text-white" style="background-color:#33001a">
        <h3>Adicionar Novo Filme</h3>
    </div>

    <form method="post" action="{{route('movies.register')}}">
        @csrf
        <div class="container" style="color:white;">
            <img src='http://www.ma10.com.br/wp-content/uploads/2017/03/20160917_cinema.jpg'
                 style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>

            <div class="form-group"> Link da capa do filme
                <input type="url" name="picture" class="form-control" value="{{old('picture')}}"
                       placeholder="link da capa do filme">
            </div>

            <div class="form-group {{ $errors->has('title') ? 'is-invalid' : '' }}">
                Titulo do filme
                <input type="text" name="title" class="form-control" value="{{old('title')}}"
                       placeholder="Titulo do filme">
            </div>
            </br>
            <div>
                Data de lançamento
                <input type="text" name="releaseDate" class="form-control date" value="{{old('date')}}"
                       placeholder="data de lançamento">
            </div>
            </br>
            <div>
                Nota
                <select name="rating">
                    @foreach($arrayRating as $rating)
                        <option value="{{ $rating }}">{{$rating}}</option>
                    @endforeach
                </select>

            </div>
            </br>
            <div>
                Descrição
                <textarea rows="10" cols="50" class="form-control" name="description"
                          placeholder="Descrição">{{old('description')}}</textarea>
            </div>
            </br>
            <div>
                Escolha um diretor
                <select name="director">
                    @foreach($directors as $director)
                        <option value="{{ $director->id }}">{{ $director->name }}</option>
                    @endforeach
                </select>
            </div>

            </br>

            <div>
                <input type="submit" class="btn-danger" value="Criar">
            </div>
            </br>
        </div>
    </form>
@endsection

@push('body-scripts')
    <script>
        +(function ( window, $ ) {
            $( '.date' ).mask( '00/00/0000' );
        }( window, jQuery ));
    </script>
@endpush
