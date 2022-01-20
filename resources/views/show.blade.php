@extends('layouts.app')

@section('content')
<div class="site_main_content">
    <div class="container mt-5">
        <div class="row g-3 row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
                <div class="col">
                    <div class="album card h-100">
                        <a href=""><img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}"></a>
                            <p class="type_album">{{ $comic->type }}</p>
                            <small class="view_gallery">
                                <a href="#">view gallery</a>
                            </small>
                    </div>
                </div>
        </div>
    </div>
    <div class="single_album container">
        <div class="row d-flex">
            <div class="col-75">
                <h2> {{ strtoupper($comic->title) }} </h2>
                <div class="single_album_info">
                    <div class="avaiable col-6">
                        <p>U.S. Price: <span>{{ $comic->price }}</span></p>
                        <p>AVAIABLE</p>
                    </div>
                    <!-- /.avaiable -->
                    <div class="check col-6">
                        <p>Check Availability</p>
                    </div>
                    <!-- /.check -->
                </div>
                    <!-- /.single_album_info -->
                <div class="description">
                    <p>{{ $comic->description }} </p>
                </div>
                <!-- /.description -->
            </div>
                <!-- /.col-75 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.single_album container -->
</div>
  <!-- /.site_main_content -->
@endsection
