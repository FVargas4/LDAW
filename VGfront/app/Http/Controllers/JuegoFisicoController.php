<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\JuegoFisico;

class JuegoFisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegoFisico = Http::get(env('API_URL').'JuegoFisico');
        $array['array'] = $juegoFisico->json();
        return view("juegofisico.index",$array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juegofisico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $JuegoFisico = Http::post(env('API_URL').'JuegoFisico',[
            'titulo' => request('titulo'),
            'condicion' => request('condicion'),
            'consola' => request('consola'),
        ]);

        return redirect('juegofisico')->with('nuevo','Juego agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juegoFisico = Http::get(env('API_URL').'JuegoFisico/'.$id);
        $array['array'] = $juegoFisico->json();
        return view("juegofisico.show",$array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $juegoFisico = Http::get(env('API_URL').'JuegoFisico/'.$id);
        $array['array'] = $juegoFisico->json();
        //dd($array);
        return view('juegofisico.edit',$array);
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
        $JuegoFisico = Http::put(env('API_URL').'JuegoFisico/'.$id,[
            'titulo' => request('titulo'),
            'condicion' => request('condicion'),
            'consola' => request('consola'),
        ]);

        return redirect('juegofisico')->with('nuevo','Juego agregado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $juegoFisico = Http::delete(env('API_URL').'JuegoFisico/'.$id);
        return redirect('juegofisico')->with('eliminado','Juego borrado con éxito');

    }
}
