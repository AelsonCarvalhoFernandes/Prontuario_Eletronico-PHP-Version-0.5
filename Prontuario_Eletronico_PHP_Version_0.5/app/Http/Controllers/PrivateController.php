<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function paciente(){

        $receitas = auth()->receitas;

        return view('paciente', [
            'receita' => $receitas
        ]);
    }
}
