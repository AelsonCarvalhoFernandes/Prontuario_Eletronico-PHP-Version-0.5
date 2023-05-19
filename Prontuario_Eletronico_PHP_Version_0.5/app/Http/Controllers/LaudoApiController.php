<?php

namespace App\Http\Controllers;

use App\Models\Laudo;
use App\Models\User;
use Illuminate\Http\Request;

class LaudoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laudos = Laudo::all();

        return $laudos;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $save = Laudo::create($data);

        return response('Laudo cadastrado com sucesso', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laudos = Laudo::where('user_id', $id)->get();

        if($laudos){
            return $laudos;
        }else{
            return response('Nenhum laudo encontrado', 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $laudo = Laudo::find($id);

        if(!$laudo){
            return response('Laudo não encontrada', 400);
        }

        $laudo->update($data);

        return response('Conteudo do laudo Atualizado com sucesso', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laudo = Laudo::find($id)->first();

        if(!$laudo){
            return response('Laudo não encontrado', 400); 
        }
        Laudo::destroy($laudo['id']);
        return response('Laudo excluido com sucesso', 200);
    }
}
