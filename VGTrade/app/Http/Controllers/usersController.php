<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

use App\Models\Post;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return users::getAllUsuarios();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = users::create([
            'name' => request('name'),
            'email' => request('email'),
            'telefono' => request('telefono'),
            'password' => request('password'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $usuario = users::findorFail($id);
        //return [$juegoFisico];
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $usuario = users::find($id);

        $success = $usuario->update([
            'name' => request('name'),
            'telefono' => request('telefono'),
            'email' => request('email'),
            'password' => request('password'),
        ]);
        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = users::findOrFail($id);

        $result =$usuario->delete();

        return [
            'success' => $result
        ];
    }
}
