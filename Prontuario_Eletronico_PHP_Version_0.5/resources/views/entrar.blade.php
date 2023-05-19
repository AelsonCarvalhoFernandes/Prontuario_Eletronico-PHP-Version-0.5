@extends('layouts.default')

@section('title', 'entrar')
    
@section('content')
    <div id="login_conteiner">

        <form action="{{route ('login')}}" method="POST">
            @csrf

            @error('error')
                <div>
                    {{$message}}
                </div>
            @enderror


            <div>
                <label for="email">Email:</label><br>
                <input type="email" name="email" class="input_login">
            </div>
            <div>
                <label for="password">Senha:</label><br>
                <input type="password" name="password" class="input_login">
            </div>

            <div class="conteiner_center">
                <input type="submit" value="Entrar" class="button_site">
            </div>
        </form>

    </div>
@endsection