<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Gate;

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
        Gate::authorize("viewAny", users::class);
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
        Gate::authorize("create", users::class);
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
        Gate::authorize("store", users::class);
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
        Gate::authorize("show", users::class);
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
        Gate::authorize("update", users::class);
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
        Gate::authorize("update", users::class);
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
        Gate::authorize("delete", users::class);
        $usuario = Http::delete(env('API_URL').'users/'.$id);
        return redirect('usuario')->with('mensaje','Usuario borrado con éxito');

    }

    function login(){
        return view("auth.login");
    }

    
}
