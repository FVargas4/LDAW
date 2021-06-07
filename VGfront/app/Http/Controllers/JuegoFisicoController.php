<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\JuegoFisico;

use App\Models\Titulo;


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
        $titulo = Titulo::getTitulo();
        return view('juegofisico.create',["titulo" => $titulo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'titulo_id' => 'required',
            'condicion' => 'required',
            'consola' => 'required',
        ]);
        $JuegoFisico = Http::post(env('API_URL').'JuegoFisico',[
            'titulo_id' => request('titulo_id'),
            'user_id' => request('user_id'),
            'condicion1' => request('condicion'),
            'consola1' => request('consola'),
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
        // $titulo = Titulo::getTitulo();
        // $juegoFisico = Http::get(env('API_URL').'JuegoFisico/'.$id);
        // $array['array'] = $juegoFisico->json();
        // return view('juegofisico.edit',$array,["titulo" => $titulo])->with('id', $id);

        $titulo = Titulo::getTitulo();
        $juegoFisico = Http::get(env('API_URL').'JuegoFisico/'.$id);
        $array['array'] = $juegoFisico->json();
        //dd($array);
        //return view('juegofisico.edit',$array);
        return view('juegofisico.edit',$array,["titulo" => $titulo]);
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
            'titulo_id' => request('titulo_id'),
            'user_id' => request('user_id'),
            'condicion1' => request('condicion'),
            'consola1' => request('consola'),
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
