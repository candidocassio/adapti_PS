@extends('layout.template1')

@section('title', 'Filmes | Adapti PS')

@section('content')
    @foreach ($movies as $movie)
        <div class="card-film">
            <div class="card-buttons">
                    <a href="{{route('movie.edit', $movie->id) }}"><button>Editar Filme</button></a>
                    <form action="{{route('movie.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="button-delete" type="submit"> Apagar Filme </button>
                    </form>
            </div>

            <div class="listed-movies-title">
                <p><strong>{{$movie->title}}</strong></p>
            </div>

            <img class="listed-movies-title" src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}" height ='200px' width ='200px'>

            <div class="info-card">
                <p class="specify-genre"><strong>{{$movie->genre}}</strong></p>
                <p class="specify-country-"><strong>País: </strong>{{$movie->country->name}}</p>
                <p class="specify-release"><strong>Lançamento: </strong>{{$movie->release}}</p>
                <p class="specify-rating"><strong>Nota: </strong>{{$movie->rating}}</p>
                <p class="specify-synopsis"><strong>Sinopse: </strong>{{$movie->synopsis}}</p>
            </div>
        </div>
    @endforeach
@endsection
