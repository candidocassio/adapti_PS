@extends('layout.template1')

@section('title', 'Filmes | Adapti PS')

@section('content')

    <div class="main-title">
        <h1 >Filmes</h1>
    </div>

    <div style="padding-bottom: 10px">
        <hr>
    </div>

    <div class="index-main-content-container">
        @foreach ($movies as $movie)
            <div class="card-film">
                <div class="top-card-info">

                    <div class="top-card-movie-title">
                        <p><strong>{{$movie->title}}</strong></p>
                    </div>

                    <div class="top-card-btn">
                        <a href="{{route('movie.edit', $movie->id) }}"><button><i class="fas fa-pen-square"></i></button></a>
                        <form action="{{route('movie.destroy', $movie->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            
                            <button class="button-delete" type="submit"> <i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>

                </div>

                <div class="card-img">
                    <img class="listed-movies-title" src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}" >
                    
                    <div class="info-card">
                        <p class="specify-genre"><strong>Genero:</strong> {{$movie->genre}}</p>
                        <p class="specify-country-"><strong>País: </strong>{{$movie->country->name}}</p>
                        <p class="specify-release"><strong>Lançamento: </strong>{{$movie->release}}</p>
                        <p class="specify-rating"><strong>Nota: </strong>{{$movie->rating}}</p>
                        <p class="specify-synopsis"><strong>Sinopse: </strong>{{$movie->synopsis}}</p>
                    </div>
                </div>


            </div>
    
        @endforeach
    </div>
@endsection
