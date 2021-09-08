<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>
<body>

    <form id="form-search-item" action="{{ route('movie.search') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input id = "search-item" name="search-item">
        <button type="submit">Pesquisar</button>
    </form>

    <br>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>  <br><br>

    @foreach ($movies as $movie)
        <ul>
            <li>
                <h4>Titulo do Filme: <b>{{$movie->title}}</b> e País de Origem: <b>{{$movie->country->name}}</b></h4>
                
                <a href="{{route('movie.edit', $movie->id) }}"><button>Editar Filme</button></a><br><br>
                <img src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}" height ='200px' width ='200px'>
            </li>
        </ul>
           
    @endforeach
</body>
</html>