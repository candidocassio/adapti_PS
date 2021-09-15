<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;700&display=swap" rel="stylesheet">

    {{-- <style>
        *{
            font-family: 'Allison', cursive;
        }
    </style> --}}
</head>

<body>
    <header class="hearder-container">
        <nav class="nav-container">
            <ul class="nav-items">

                <li>
                    <a href="{{route('movie.index')}}"> Adapti </a>
                </li>

                <li>
                    {{-- criar menu 'que desce e colocar informações legais e paginas legais, como o site do imdb' --}}
                    {{-- filmes melhores classificados, filmes por pais e etc ... --}}
                    <a href="{{ route('movie.create') }}"><button>Adicionar Filme</button></a>
                </li>

                <li>
                    <form class="form-search" id="form-search" action="{{ route('movie.search') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input  class = "input-search" type="text" id="search-item" name="search-item" required placeholder="Digite sua pesquisa">
                        <button class= "button-search" type="submit">Pesquisar</button>
                    </form>
                </li>
                
            </ul>
        </nav>
    </header>

    <main class="main-container">
        @yield('content')
    </main>

    
    <footer class="footer-container"></footer>

    
</body>
</html>