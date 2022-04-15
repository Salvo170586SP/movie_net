@extends('layouts.app')

@section('content')
    <section id="movie-list">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Film al cinema</h1>
            <a href="{{ route('admin.movies.create') }}" class="btn btn-secondary mx-2">Aggiungi Film</a>
        </div>



        <table class="table bg-light shadow my-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Locandina</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Cast</th>
                    <th scope="col">Data uscita</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Disponibilità</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <th scope="row">1</th>
                        <td> <a href="{{ route('admin.movies.show', $movie->id) }}"><img src="{{ $movie->img }}"
                                    width="50" alt="{{ $movie->title }}"></a></td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ substr($movie->description, 0, 50) }}...</td>
                        <td>{{ $movie->actor->name }}</td>
                        <td>{{ $movie->release_date }}</td>
                        <td>${{ $movie->price }}</td>
                        <td>{{ $movie->available ? 'nelle sale' : 'non disponibile' }}</td>
                        <td class="d-flex">
                            <a href="{{ route('admin.movies.show', $movie->id) }}" class="btn btn-primary"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-secondary mx-2"><i
                                    class="fa-solid fa-file-pen"></i></a>

                            <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </section>
@endsection
