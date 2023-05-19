<?php

namespace App\Http\Controllers;

use App\Models\Atestado;
use App\Models\User;
use Illuminate\Http\Request;

class AtestadoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atestado = Atestado::all();

        return $atestado;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $save = Atestado::create($data);

        return response('Atestado cadastrado com sucesso', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $atestado = Atestado::where('user_id', $id)->get();

        if($atestado){
            return $atestado;
        }else{
            return response('Nenhum atestado encontrado', 400);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->all();
        $atestado = Atestado::find($id)->first();

        if(!$atestado){
            return response('Laudo não encontrada', 400);
        }
        
        $atestado->update($data);

        return response('Conteudo do atestado Atualizado com sucesso', 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $atestado = Atestado::find($id)->first();

        if(!$atestado){
            return response('Atestado não encontrado', 400); 
        }

        Atestado::destroy($atestado['id']);
        return response('Atestado excluido com sucesso', 200);
        
    }
}
