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
        <h3>Add New Movies</h3>
    </div>

    </br>

    <form method="post" action="{{route('movies.store')}}">
        @csrf
        <div class="container" style="color:white;">
            <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHpA7dt5lZRwVPK_ae7PI_9zvD8fZGt32Yo8ziKoDbZSJi6DXJ'
                 style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>

            <div class="form-group"> Add Picture link
                <input type="url" name="picture" class="form-control" value="" placeholder="Picture link">
            </div>

            <div class="form-group {{ $errors->has('title') ? 'is-invalid' : '' }}">
                Text Movie name
                <input type="text" name="title" class="form-control" value="" placeholder="Movie title">
            </div>
            </br>
            <div>
                Release Date
                <input type="date" name="releaseDate" class="form-control" value="" placeholder="Relese Date">
            </div>
            </br>
            <div>
                RunTime
                <input type="time" name="runtime" class="form-control" value="" placeholder="Runtime">
            </div>
            </br>
            <div>
                Description
                <textarea rows="10" cols="50" class="form-control" name="description"
                          placeholder="Description"></textarea>
            </div>
            </br>
            <!-- Director  -->
            <div>
                Choose Directors
                <select name="director">
                    @foreach($directors as $director)
                        <option value="{{ $director->id }}">{{ $director->name }}</option>
                    @endforeach
                </select>
            </div>

            </br>

            <div>
                <input type="submit" class="btn-danger" value="Update">
            </div>
            </br>
            </br>
        </div>
    </form>
@endsection
