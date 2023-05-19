<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use App\Models\User;
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

        $save = Receita::create($receita);

        return response('Receita cadastrada com sucesso', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $receitas = Receita::where('user_id', $id)->get();

        if($receitas){
            return $receitas;
        }else{
            return response('Nenhum receita encontrado', 400);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $receita = Receita::find($id);

        if(!$receita){
            return response('Receita não encontrada', 400);
        }

        
        $receita->update($data);

        return response('Conteudo Atualizado com sucesso', 200);

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

        Receita::destroy($receita['id']);

        return response('Receita deletada com sucesso', 200);
    }
}
