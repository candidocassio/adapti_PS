<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Filme | Adapti PS</title>
</head>
<body>
    <form id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title"> titulo</label>
        <input type="text" name="title" required>

        <label for="genre"> Genero </label>
        <input type="text" name="genre" required>

        <label for="country_id"> Country_id</label>
        <input type="text" name="country_id" required>

        <label for="release"> Lançamento </label>
        <input type="text" name="release" required>

        <label for="release"> Nota </label>
        <input type="text" name="rating" required><br><br>

        <label for="synopsis"> Sinopse </label>
        <textarea name="synopsis" id="synopsis" cols="30" rows="10"></textarea><br><br>

        <input type="file" name="image" accept="image/*" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>