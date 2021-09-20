@extends('layout.template1')

@section('title', 'Adicinar Filme')

@section('content')

    
        <form class="form-crud" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="inputs-create">
            <label for="title"> Titulo</label>
            <input class="input-form" type="text" name="title" required>

            <label for="genre"> Gênero </label>
            <input class="input-form" type="text" name="genre" required>

            {{-- Pegar paises diponíves no bd e colocar na lista de paises cadastrados, ou cadastrar um novo --}}
            <label for="country_id"> País </label>
            <select class="input-form" id="country_id" name="country_id" required>
                <option value="" disabled selected> -- Selecione o País -- </option>
                    @foreach ($countries as $country) 
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
            </select>

            <label for="release" > Lançamento </label>
            <input class="input-form" type="date" name="release" required>

            <label for="release"> Nota </label>
            <input class="input-form" type="text" name="rating" required>

            <label for="synopsis"> Sinopse </label>
            <textarea name="synopsis" id="synopsis" cols="5" rows="5"></textarea>
            <label for="image">  Cartaz </label>
            <input type="file" name="image" accept="image/*" required>
    </div>
        <div class="btn-save-film">
            <button class="button-submit-create" type="submit" form="form-create">Criar Filme</button>
            <a class="button-back" type="submit" href="{{route('movie.index')}}">Voltar</a>
        </div>
    </form>


    
@endsection