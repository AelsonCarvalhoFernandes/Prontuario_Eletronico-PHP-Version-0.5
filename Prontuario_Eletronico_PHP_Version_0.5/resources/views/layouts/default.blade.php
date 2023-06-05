<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/layout_style.css">
    <link rel="stylesheet" href="/css/forms_style.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <div id="cabecalho" >
            <h3>Pre-maap - Prontuário eletrônico medico de apoio ao atendimento do paciente</h3>
            <div id="login_auth_desktop">
                @if (auth()->check())
                <span class="material-icons">face</span> <a href="{{route ('perfil')}}">{{auth()->user()->name}}</a>
                    <a id="entrar_sair" href="{{route ('logout')}}">Sair</a>
                @else
                    <a id="entrar_sair" href="{{route ('entrar')}}">Entrar</a>
                @endif
            </div>
            <span id="hamburger_mobile" class="material-icons">menu</span>
        </div>

        

    </header>

    <div id="navegacao">
        <nav>
            <ul>
                <li><a href="{{route ('index')}}">Pagina Inicial</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Sobre</a></li>
                @if (auth()->check())
                    <li><a href="{{route ('pagina_paciente')}}">Pagina do Paciente</a></li>
                @endif
            </ul>
            <div id="login_auth_cell">
                @if (auth()->check())
                    <span class="material-icons">face</span> <a href="#">{{auth()->user()->name}}</a>
                    <a id="entrar_sair" href="{{route ('logout')}}">Sair</a>
                @else
                    <a id="entrar_sair" href="{{route ('entrar')}}">Entrar</a>
                @endif
            </div>
        </nav>
    </div>


    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

    <script src="/js/script.js"></script>
    
</body>
</html>