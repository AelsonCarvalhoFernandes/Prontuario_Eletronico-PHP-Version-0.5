<?php

namespace App\Http\Controllers;

use App\Models\Atestado;
use App\Models\Information;
use App\Models\Laudo;
use App\Models\Receita;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = $data['login'];
        $infor = $data['informacao'];
        $user['password'] = Hash::make($user['password']);
        $save = User::create($user);
        $infor['user_id'] = $save->id;
        $save = Information::create($infor);
        return response('Usuario salvo com sucesso', 200);
    }

    public function store_medic(Request $request)
    {
        $user = $request->all();
        $user['password'] = Hash::make($request->password);

        $save = User::create($user);

        return response($save);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $user = User::find($id)->first();
        $info = Information::where('user_id', $user['id'])->first();
        $laudos = Laudo::where('user_id', $user['id'])->first();
        $receitas = Receita::where('user_id', $user['id'])->first();
        $atestados = Atestado::where('user_id', $user['id'])->first();

        return [
            'user'=>$user,
            'information'=>$info, 
            'laudos'=>$laudos,
            'receitas'=>$receitas,
            'atestados'=>$atestados,
        ];

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->all();
        if(array_key_exists('password', $dados)){
            $dados['password'] = Hash::make($dados['password']);
        }
        $user = User::find($id);
        $user->update($dados);
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        return response('Usuario deletado com sucesso', 200);
    }
}
