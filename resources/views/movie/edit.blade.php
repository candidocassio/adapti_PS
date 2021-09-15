@extends('layout.template1')
{{-- colocar template aqui --}}
@section('title', 'Cadastrar Filme')
    
@section('header')

@section('content')
    <form class="form-crud" id="form-edit" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title"> Título</label>
        <input class = "input-form"type="text"  value = "{{ $movie->title }}" name="title" required>

        <label for="genre"> Gênero </label>
        <input class = "input-form"type="text" value = "{{ $movie->genre }}" name="genre" required>

        <label for="country_id"> País </label>        
        <select class="input-form" id="country_id" name="country_id" required>
            <option value="" disabled selected> -- Selecione o País -- </option>
                @foreach ($countries as $country) 
                    <option value="{{$country->id}}" {{$country->id===$movie->country_id ? 'selected' : ''}}>{{$country->name}}</option>
                @endforeach
        </select>

        <label for="release"> Lançamento </label>
        <input class = "input-form"type="date" value = "{{ $movie->release }}" name="release" required>

        <label for="rating"> Nota </label>
        <input class = "input-form"type="text" value = "{{ $movie->rating }}" name="rating" required><br><br>

        <label for="synopsis"> Sinopse </label>
        <textarea class = "input-form"name="synopsis" id="synopsis" cols="30" rows="10">{{ $movie->synopsis }}</textarea><br><br>

        <input class = "input-form" type="file" name="image" accept="image/*" > 
        <img src="/storage/{{$movie->image}}" style=" width:100px; height:100px;" alt="poster do filme">
        
        {{-- Colocar botao para deletar o filme aqui e retornar para a index, colocar um alert também pode ser legal --}}
        <button class="button-submit" type="submit">Salvar Alterações</button>
    </form>

    <form action="{{route('movie.destroy', $movie->id) }}" method="POST">
        @csrf
        @method('delete')
        <button class="button-delete" type="submit">Apagar Filme </button>
    </form>

    <a class="button-back" type="submit" href="{{route('movie.index')}}">Voltar</a>

@endsection
    
</body>
</html>