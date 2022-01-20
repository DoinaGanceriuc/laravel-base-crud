@extends('layouts.app')

@section('content')

<div class="container p-5">
    <h2 class="text-center">Aggiorna fumetto</h2>


    <form action="{{route('admin.comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo fumetto</label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby="titleHelper" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description"  rows="3" class="form-control">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Link immagine</label>
            <input type="text" name="thumb" id="thumb" class="form-control" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control" aria-describedby="priceHelper" placeholder="" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie Fumetto</label>
            <input type="text" name="series" id="series" class="form-control" aria-describedby="seriesHelper" placeholder="" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHelper" placeholder="Indicare la data nel formato YYYY-MM-DD" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia di fumetto</label>
            <input type="text" name="type" id="type" class="form-control" aria-describedby="typeHelper" placeholder="" value="{{$comic->type}}">
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
        <a class="btn btn-warning" href="{{route('admin.comics.index')}}">Annulla</a>
    </form>
</div>

@endsection
