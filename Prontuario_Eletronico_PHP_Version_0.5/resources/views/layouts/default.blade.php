<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div id="cabecalho">
            <div>
                <h3>Hospital Deus te Guie</h3>
            </div>

            <div>
                @if (auth()->check())
                    <a href="#">{{auth()->user()->name}}</a>
                    <a href="{{route ('logout')}}">Sair</a>
                @else
                    <a href="{{route('entrar')}}">Entrar</a>
                @endif
            </div>

        </div>
        <nav>
            <span class="material-icons" id="burger">menu</span>
            <ul id="menu_itens">
                
                <li class="itemnav" ><a href="#">Pagina Inicial</a></li>
                <li class="itemnav"><a href="#">Nossos Serviços</a></li>
                <li class="itemnav"><a href="#">Sobre</a></li>
                @if (Auth()->check())
                    <li class="itemnav" ><a href="#">Laudos</a></li>
                    <li class="itemnav" ><a href="#">Atestados</a></li>
                    <li class="itemnav" ><a href="#">Receitas</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
    <script src="js/script.js"></script>
</body>
</html>