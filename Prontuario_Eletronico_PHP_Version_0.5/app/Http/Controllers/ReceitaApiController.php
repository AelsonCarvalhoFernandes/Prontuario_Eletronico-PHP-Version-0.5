<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receitas = Receita::all();

        return $receitas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $receita = $request->all();

        Receita::create($receita);

        return response('Receita cadastrada com sucesso', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $receita = Receita::find($id)->first();

        return $receita;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $receita = Receita::find($id)->first();

        if(!$receita){
            return response('Receita não encontrada', 400);
        }

        Receita::update($data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $receita = Receita::find($id)->first();

        if(!$receita){
            return response('Receita não encontrada', 400);
        }

        Receita::destroy($id);

        return response('Receita deletada com sucesso', 200);
    }
}
