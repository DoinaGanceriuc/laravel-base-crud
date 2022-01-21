@extends('layouts.app')

@section('content')
<div class="site_main_content">
    <div class="container mt-5">
        <div class="row g-3 row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card h-100">
                        <a href="#"><img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ strtoupper($movie->title) }} </h5>
                            <h6>{{ $movie->title }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
  <!-- /.site_main_content -->
@endsection
