<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    public function paciente(){

        $receitas = Receita::where('user_id', Auth::id())->get();

        return view('paciente', [
            'receita' => $receitas
        ]);
    }

    public function laudo(){
        
    }
}
