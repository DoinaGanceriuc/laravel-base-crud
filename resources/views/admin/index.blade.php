@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Admin all comics</h1>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Series</th>
      <th scope="col">Sale_date</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
       @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>

@endsection
