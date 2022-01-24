@extends('layouts.admin')

@section('content')

<div class="container p-5">
    <h2 class="text-center">Aggiungi nuovo film</h2>
    @include('partials.errors')

    <form action="{{route('admin.movies.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Link immagine</label>
            <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" aria-describedby="imageHelper" placeholder="Incolla il link dell'immagine" value="{{old('image')}}">
            @error('image')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" aria-describedby="titleHelper" placeholder="Scrivi qui il titolo del film" value="{{old('title')}}">
            @error('title')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="original_title" class="form-label">Titolo originale</label>
            <input type="text" name="original_title" id="original_title" class="form-control @error('original_title') is-invalid @enderror" aria-describedby="original_titleHelper" placeholder="Scrivi qui il titolo originale del film" value="{{old('original_title')}}">
            @error('original_title')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" rows="3" class="form-control">{{old('description')}}</textarea>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" name="genre" id="genre" class="form-control" aria-describedby="genreHelper" placeholder="" value="{{old('genre')}}">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
        <a class="btn btn-warning" href="{{route('admin.movies.index')}}">Annulla</a>
    </form>
</div>

@endsection
