<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Http;

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
        //dd(auth()->user());
        $usuario = users::getUsuario();
        return view("usuario.index", compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'password' => 'required',
            'contrasenia_confirmation' => 'required',
        ]);
        $usuario = Http::post(env('API_URL').'users',[
            'name' => request('name'),
            'telefono' => request('telefono'),
            'email' => request('email'),
            'password' => request('password'),
        ]);


        //dd($usuario)

        return redirect('usuario')->with('mensaje','Usuario agregado con éxito');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $usuario = Http::get(env('API_URL').'users/'.$id);
        $array['array'] = $usuario->json();
        return view("usuario.show",$array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = users::findUsers_id($id);
        
        //dd($usuario);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $usuario = Http::put(env('API_URL').'users/'.$id,[
            'name' => request('name'),
            'telefono' => request('telefono'),
            'email' => request('email'),
            'password' => request('password'),
        ]);

        //dd($usuario);

        return redirect('usuario')->with('mensaje','Usuario modificado con éxito');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = Http::delete(env('API_URL').'users/'.$id);
        return redirect('usuario')->with('mensaje','Usuario borrado con éxito');

    }

    function login(){
        return view("auth.login");
    }

    
}
