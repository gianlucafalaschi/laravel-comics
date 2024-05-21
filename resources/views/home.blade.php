@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>CURRENT SERIES</h1>

        <div>
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col bg-black">
                            <div class="card my-3" style="width: 18rem;">
                                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$comic['series']}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection