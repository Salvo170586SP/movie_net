@extends('layouts.app')

@section('content')
    <section id="create-movie">
        <h2>Modifica film</h2>

        <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="col-12">
                    <label for="title">Aggiungi Titolo</label>
                    <input type="text" class="form-control" name="title" value="{{$movie->title}}">
                </div>
                <div class="col-12 py-3">
                    <label for="description">Aggiungi trama</label>
                    <textarea rows="5" class="form-control" name="description" >value="{{$movie->description}}"</textarea>
                </div>
                <div class="col-12 py-3">
                    <label for="img">Aggiungi url locandina</label>
                    <input type="url" class="form-control" name="img" value="{{$movie->img}}">
                </div>
                <div class="col-12 py-3">
                    <label for="release_date">Aggiungi data di uscita</label>
                    <input type="date" class="form-control" name="release_date" value="{{$movie->release_date}}">
                </div>
                <div class="col-12 py-3">
                    <label for="price">Aggiungi prezzo</label>
                    <input type="text" class="form-control" name="price" value="{{$movie->price}}">
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Modifica</button>
        </form>
    </section>
@endsection
