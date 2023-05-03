@extends('layouts.default')

@section('title', 'Bem Vindo')

@section('content')
    <div id="pagina_inicial">
        <div id="inicial title"><h3>Ultimas Noticias</h3></div>

        @foreach($posts as $post)
            <a href="#">
                <div>
                    <img src="postimage" alt="image">
                    <div>
                        <h4>titulo</h4>
                        <p>contaudo</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection