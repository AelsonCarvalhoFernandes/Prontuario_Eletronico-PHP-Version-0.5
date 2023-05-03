<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutePublicController extends Controller
{
    public function index(){
        return view('index');
    }

    public function entrar(){
        return view('entrar');
    }
}
