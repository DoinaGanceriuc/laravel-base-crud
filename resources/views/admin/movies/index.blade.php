@extends('layouts.admin')

@section('content')

<div class="container p-3">
    <h2 class="text-center">All Movies</h2>
    <div class="text-end mb-5">
       <a href="#" class="btn btn-primary">Create</a>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Movie Image</th>
      <th scope="col">Title</th>
      <th scope="col">Original Title</th>
      <th scope="col">Genre</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
       @foreach ($movies as $movie)
        <tr>
            <th scope="row">{{$movie->id}}</th>
            <td><img class="w-50" src="{{ $movie->image }}" alt="{{ $movie->title }}"></td>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->original_title }}</td>
            <td>{{ $movie->genre }}</td>
            <td>
                <a class="btn btn-primary" href="#"><i class="fas fa-eye"></i></a>
                <a class="btn btn-warning" href="#"><i class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$movie->id}}">
                <i class="fas fa-trash-alt"></i>
                </button>
                <div class="modal fade" id="delete{{$movie->id}}" tabindex="-1" aria-labelledby="modal-{{$movie->id}}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="{{$movie->id}}Label">Stai cercanando di cancellare il fumetto {{$movie->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Sei sicuro di voler procedere con l'eliminazione?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <form action="#" method="post">
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
