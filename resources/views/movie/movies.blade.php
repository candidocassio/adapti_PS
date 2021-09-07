<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>

<a href="{{ route('movie.create') }}"><button>Criar</button></a>

<body>
    @foreach ($movies as $movie)
        <ul>
            <li>
                <h4>Titulo do Filme: <b>{{$movie->title}}</b> e País de Origem: <b>{{$movie->country->name}}</b></h4><br>
                
                <a href="{{route('movie.edit', $movie->id) }}">Editar Filme</a><br><br>
                <img src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}">
            </li>
        </ul>
           
    @endforeach
</body>
</html>