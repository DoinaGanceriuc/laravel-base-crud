@extends('layouts.admin')

@section('content')

<div class="bgblue">
    <div class="container p-3">
        <div class="card mb-3 m-auto" style="max-width: 740px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ $movie->image }}" class="img-fluid rounded-start h-100 w-100 object_fit" alt="{{ $movie->original_title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ strtoupper($movie->original_title) }}</h5>
                        <h6>{{$movie->title}}</h6>
                        <p class="card-text">{{$movie->description}}</p>
                        <p class="card-text">Genere: {{$movie->genre}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary" href="{{route('admin.movies.index')}}">Tutti i film</a>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.bgblue -->

@endsection
