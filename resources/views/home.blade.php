@extends('layouts.base')

@section('pageTitle')

@endsection

@section('pageContent')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic )
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="">
                    <div class="title">{{$comic['series']}}</div>
                </div>
            @endforeach
            <div class="btn"><a href="#">Load More</a></div>
        </div>
    </div>
@endsection
