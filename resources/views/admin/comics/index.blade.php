@extends('layouts.app')

@section('content')

<div class="container p-3">
    <h1 class="text-center pb-5">Admin all comics</h1>
    <div class="text-center mb-5">
        <a href="{{route('admin.comics.create')}}" class="btn btn-primary">Create</a>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Series</th>
      <th scope="col">Sale_date</th>
      <th scope="col">Type</th>
      <th scope="col">Actions</th>
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
            <td>
                <a href="{{route('admin.comics.show', $comic->id)}}">View</a> -
                <a href="{{route('admin.comics.edit', $comic->id)}}">Edit</a>
                <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>

@endsection
