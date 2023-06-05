@extends('layouts.default')

@section('title', 'Perfil de usuário ')

@section('content')

    <div id="content_conteiner">
            @foreach($information as $information)

                <div id="content">

                    <h2>Perfil do paciente:</h2>

                    <p><strong>Nome:</strong> {{Auth()->user()->name}} {{Auth()->user()->last_name}}</p>

                    <p><strong>Sexo:</strong>{{$information->sexo}}</p>

                    <p><strong>CPF:</strong>{{Auth()->user()->cpf}}</p>

                    <p><strong>RG:</strong>{{Auth()->user()->rg}}</p>

                    <p><strong>CNS:</strong>{{Auth()->user()->cns}}</p>

                </div>

                <div id="content">
                    <h2>Informações de contato:</h2>

                    <p><strong>E-mail:</strong> {{Auth()->user()->email}}</p>
                    <p><strong>Telefone:</strong>{{$information->telefone}}</p>
                    <p><strong>Endereço:</strong>{{$information->endereco}}</p>
                    <p><strong>Numero:</strong>{{$information->numero}}</p>
                    <p><strong>Cidade:</strong>{{$information->cidade}}</p>
                    <p><strong>Bairro:</strong>{{$information->bairro}}</p>
                    <p><strong>Estado:</strong>{{$information->estado}}</p>

                </div>
            @endforeach
        
    </div>


@endsection