@extends('layout.template1')
{{-- colocar template aqui --}}
@section('title', 'Cadastrar Filme')
    
@section('header')

@section('content')

<div class="edit-container">

        <div class="edit-item-left">
            <form class="form-crud" id="form-edit" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="edit-item-left-content">

                    <div class = "img-edit">
                        <img  src="/storage/{{$movie->image}}" alt="poster do filme"> 
                    </div>
                    <br>
                    <div class = "input-form-img">
                        <input  type="file" name="image" accept="image/*" > 
                    </div>
                </div>
        </div>



        <div class="edit-item-right">

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
            <input class = "input-form"type="text" value = "{{ $movie->rating }}" name="rating" required>
    
            <label for="synopsis"> Sinopse </label>
            <textarea class = "input-form"name="synopsis" id="synopsis" cols="30" rows="5">{{ $movie->synopsis }}</textarea><br><br>

        </div>

        <div class="btns-edit">

                <button class="button-submit-edit" type="submit">Salvar Alterações</button>
                </form>

                <form action="{{route('movie.destroy', $movie->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="button-delete-edit" type="submit">Apagar Filme </button>
                </form>

                <a class="button-back" type="submit" href="{{route('movie.index')}}">Voltar</a>

        </div>
</div>
    

@endsection
    

</body>
</html>