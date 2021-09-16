<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> @yield('title')</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" > --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link href="{{asset('resources/fontawesome5.15.4-web/css/all.css')}}" rel="stylesheet">
    
</head>

<body>

    <header class="hearder-container">       
        <nav class="nav-container">
            <div class="logo-container">
                <a href="{{route('movie.index')}}"> Adapti <p style="">Filmes</p></a>
                {{-- <img class="logo-img" src="{{asset('resources/img/logoADAPTI.png')}}" alt="logo"> --}}
            </div>

            <div class="menu-dropdown-container">
                <ul class="menu-dropdown">
                    <li class="menu-drop-donw-icon">Menu</li>
                    <ul>
                        <li class="item-dropdown-menu"><a class="link-item-dropdown-menu" href="">Top Rated Movies</a></li>
                        <li class="item-dropdown-menu"><a class="link-item-dropdown-menu" href="">Most Popular Movies</a></li>
                        <li class="item-dropdown-menu"><a class="link-item-dropdown-menu" href="">Show and Movie Genres</a></li>
                        <li class="item-dropdown-menu"><a class="link-item-dropdown-menu" href="">Releases</a></li>
                    </ul>
                </ul>
            </div>

            <div class="search-header-container">
                <form class="form-search" id="form-search" action="{{ route('movie.search') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input  class = "input-search-bar" type="search" id="search-item" name="search-item" required placeholder="Digite sua pesquisa">
                    <button class="submit-btn-search-bar" type="submit">Pesquisar</button>

                </form>
            </div>

            <div class="btn-header-add-movie">
                <a href="{{ route('movie.create') }}"><button>Adicionar Filme</button></a> 
            </div>
        </nav>
        
    </header>

    <main class="main-container">
        <h1>Filmes</h1>
        @yield('content')
    </main>

    
    <footer class="footer-container">
        <div class="container-author">
            Desenvolvido por <a href="https://www.adapti.info/"> Adapti-Soluções</a> Web 2021
        </div>
        <div class="footer-link-social-midia">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a>
            <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>

    
</body>
</html>