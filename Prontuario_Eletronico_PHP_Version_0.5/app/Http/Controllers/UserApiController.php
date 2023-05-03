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

        $user = User::find($id)->get();
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
        $data = $request->all();

        $user = User::find($id)->first();

        return User::updated($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
