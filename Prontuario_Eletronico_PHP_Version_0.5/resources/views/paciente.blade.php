@extends('layouts.default')

@section('title', 'Pagina do paciente')

@section('content')
    <div id="user_conteiner">
        <div id="user_options_conteiner">
            <a class="user_options" href="#">Receitas</a>
            <a class="user_options" href="#">Atestados</a>
            <a class="user_options" href="#">Laudos</a>
        </div>
    </div>

    <div id="content_conteiner">

    <h2>Receitas:</h2>

            @foreach($receita as $receita)
                <a href="{{route ('receita', $receita->id)}}">
                    <div id="content">
                        <div>
                            <p>{{$receita->observacoes}}</p>
                            <small>Data de emissão: {{$receita->data_emissao}} | Data de expiração: {{$receita->data_expiracao}}</small>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
@endsection