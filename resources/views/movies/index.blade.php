@extends('layouts.app')

@section('content')
<div class="site_main_content">
    <div class="container mt-5">
        <div class="row g-3 row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card h-100">
                        <a href="{{route('movies.show', $movie->id)}}"><img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ strtoupper($movie->original_title) }} </h5>
                            @if ($movie->is_available)
                                <small class="card-text">AVAILABLE NOW</small>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
  <!-- /.site_main_content -->
@endsection
