@extends('layouts.app')

@section('content')
<div class="site_main_content">
    <div class="container mt-5">
        <div class="row g-3 row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
                <div class="col">
                    <div class="album card h-100">
                        <a href=""><img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}"></a>
                            <p class="type_album">{{ $movie->genre }}</p>
                            <small class="view_gallery">
                                <a href="#">view gallery</a>
                            </small>
                    </div>
                </div>
        </div>
        <div class="single_album container">
            <div class="col-75">
                <h2> {{ strtoupper($movie->title) }} </h2>
                <div class="single_album_info">
                    <div class="description">
                        <p>{{ $movie->description }} </p>
                    </div>
                    <!-- /.description -->
                </div>
            <!-- /.single_album_info -->
            </div>
            <!-- /.col-75 -->
        </div>
        <!-- /.single_album container -->
</div>
  <!-- /.site_main_content -->
@endsection
