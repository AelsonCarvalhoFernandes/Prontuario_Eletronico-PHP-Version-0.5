<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Receita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{

    public function perfil(){
        
        $information = Information::where('user_id', Auth::id())->get();

        return view('perfil', ['information' => $information]);
    }


    public function paciente(){

        $receitas = Receita::where('user_id', Auth::id())->get();

        return view('paciente', [
            'receita' => $receitas
        ]);
    }

    

    public function laudo(){

    }
}
