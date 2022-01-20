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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$comic->id}}">
                Delete
                </button>
                <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" aria-labelledby="modal-{{$comic->id}}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="{{$comic->id}}Label">Stai cercanando di cancellare il fumetto {{$comic->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Sei sicuro di voler procedere con l'eliminazione?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>

@endsection
