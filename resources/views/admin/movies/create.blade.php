@extends('layouts.app')

@section('content')
    <section id="create-movie">
        <h2>Aggiungi nuovo film</h2>

        <form action="{{ route('admin.movies.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="col-12">
                    <label for="title">Aggiungi Titolo</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="col-12 py-3">
                    <label for="description">Aggiungi trama</label>
                    <textarea rows="5" class="form-control" name="description"></textarea>
                </div>
                <div class="col-12 py-3">
                    <label for="img">Aggiungi url locandina</label>
                    <input type="url" class="form-control" name="img">
                </div>
                <div class="col-12 py-3">
                    <label for="release_date">Aggiungi data di uscita</label>
                    <input type="date" class="form-control" name="release_date">
                </div>
                <div class="col-12 py-3">
                    <label for="price">Aggiungi prezzo</label>
                    <input type="text" class="form-control" name="price">
                </div>
            </div>

            <button class="btn btn-secondary" type="submit">Invia</button>
        </form>
    </section>
@endsection
