<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoutePublicController extends Controller
{
    public function index(){
        return view('index');
    }

    public function entrar(){
        return view('entrar');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'O email é obrigatório',
            'password.required' => 'A senha está incorreta',
        ]);

        $data = $request->only('email', 'password');

        $user = Auth::attempt($data);

        if(!$user){
            return redirect()->route('entrar')->withErrors([
                'Error' => 'Email ou senha incorreta!!'
            ]);
        }

        return redirect()->route('index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
