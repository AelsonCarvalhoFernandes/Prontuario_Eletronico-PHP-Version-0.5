@extends('layouts.default')

@section('title', 'Entrar')
    
@section('content')
    <form id="entrar" action="login" method="post">
        @csrf
        <div id="form_div">
            <div><label for="email">E-mail:</label></div>
            <div><input type="text" class="textinput" id="email" name="email" placeholder="pessoa@email.com"></div>
        </div>
        <div>
            <div><label for="password">Senha:</label></div>
            <div><input type="password" class="textinput" id="password" name="password" placeholder="Coloque aqui sua senha"></div>
        </div>
        <input id="buttonsuccess" type="submit" value="Entrar">
    </form>
@endsection