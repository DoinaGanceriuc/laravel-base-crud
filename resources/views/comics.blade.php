@extends('layouts.app')

@section('content')
<div class="site_main_content">
    <div class="container mt-5">
        <div class="row g-3 row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <a href="{{route('show', $comic->id)}}"><img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ strtoupper($comic->series) }} </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
  <!-- /.site_main_content -->
@endsection
