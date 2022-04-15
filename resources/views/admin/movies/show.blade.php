@extends('layouts.app')

@section('content')
    <section id="card-movie">


        <div class="d-flex shadow bg-light rounded overflow-hidden">
            <div>
                <img src="{{ $movie->img }}" width="350" alt="{{ $movie->title }}">
            </div>
            <div class="p-3">
                <h2 class="card-title">{{ $movie->title }}</h2>
                <hr>
                <p class="card-text"><strong>Trama:</strong> {{ $movie->description }}</p>
                <p class="card-text"><strong>Data di uscita:</strong> {{ $movie->release_date }}</p>
                <p class="card-text"><strong>Prezzo:</strong> €{{ $movie->price }}</p>
                <p class="card-text"><strong>Disponibilità:</strong>
                    {{ $movie->available ? 'nelle sale' : 'non disponibile' }}</p>
                <div class="d-flex justify-content-end align-items-end" style="height: 200px">
                    <hr>
                    <a href="{{ route('admin.movies.index') }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-secondary mx-2"><i
                        class="fa-solid fa-file-pen"></i></a>
                    
                    <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </div>
            </div>
        </div>


    </section>
@endsection
