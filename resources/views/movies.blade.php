<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>
<body>
    @foreach ($movies as $movie)
        <h4>{{$movie->title}}</h4>
        <div>
            <h4>{{$movie->country->name}}</h4>
        </div>
        <!--<img src="https://source.unsplash.com/600x800/?nature,water" alt="Imagem">-->
    @endforeach
</body>
</html>