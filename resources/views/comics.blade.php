@extends('base-layout.app')

@section('main-content')
<div class="container mt-5">
    <div class="row g-4">
        @foreach ($products as $comic)
        <div class="col-2">
            <div class="card" style="width: 10rem;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
 </div>
 @endsection