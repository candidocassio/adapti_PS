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
        <nav class="nav-header-container">

            <div class="logo-container-header">
                <div class="Logo">
                    <a href="{{route('movie.index')}}"> Adapti Filmes</a>
                </div>
            </div>

            <div class="dropdown-hearder">
                <ul>

                    <li><a class="dropbtn-hearder"> <i class="fas fa-bars"></i> <p class="dropbtn-hearder-menuTxt" style="display: inline"> Menu </p></a>
                        <ul>
                            <li><a class="dropdown-intems-list" href="{{route('movie.rated')}}">Top Rated Movies</a></li>
                            <li><a class="dropdown-intems-list" href="">Most Popular Movies</a></li>
                            {{-- <li><a class="dropdown-intems-list" href="">Show and Movie Genero</a></li> --}}
                            <li><a class="dropdown-intems-list" href="">Releases</a></li>                     
                        </ul></li>
                </ul>
            </div>

            <div class="search-header-container">
                <div class = "search-header-input-group">
                    <form class="form-search" id="form-search" action="{{ route('movie.search') }}" method="POST" enctype="multipart/form-data">
                        @csrf                     
                            <input class = "search-header-input" type="search" id="search-item" name="search-item" required placeholder="Pesquisar Filmes">
                            <button class="submit-btn-header-input"><span class="fa fa-search" type="submit"></span></button>
                    </form>
                </div>
            </div>

            <div class="header-add-movie">
                <button class="btn-header-add-movie"><a href="{{ route('movie.create') }}">Adicionar Filme</a> </button>
            </div>
        </nav>
        
    </header>

    <main class="main-container">
        @yield('content')
    </main>

    
    <footer class="footer-container">
        <div class="footer-item-author">
            <p> Desenvolvido por <a href="https://www.adapti.info/" > Cássio Cândido</a>  2021</p>
        </div>
        <div class="footer-item-social-midia">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a>
            <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>

    
</body>
</html>