@extends('layouts.app')

@section('content')

<div class="bgblue">
    <div class="container p-3">
        <div class="card mb-3 m-auto" style="max-width: 740px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ $comic->thumb }}" class="img-fluid rounded-start h-100 w-100 object_fit" alt="{{ $comic->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ strtoupper($comic->series) }}</h5>
                        <p class="card-text">{{$comic->description}}</p>
                        <p class="card-text">Serie: {{$comic->series}}</p>
                        <p class="card-text">Prezzo: {{$comic->price}}</p>
                        <p class="card-text">Tipologia fumetto: {{$comic->type}}</p>
                        <p class="card-text"><small class="text-muted">Data uscita: {{$comic->sale_date}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.bgblue -->


@endsection


