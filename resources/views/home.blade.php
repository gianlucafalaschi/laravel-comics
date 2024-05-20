@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ciao sono il contenuto dell'homepage</h1>

        <div>
            @foreach ($comics as $comic)
                <div>
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <div>{{$comic['series']}}</div>
            @endforeach
        </div>
    </div>
@endsection