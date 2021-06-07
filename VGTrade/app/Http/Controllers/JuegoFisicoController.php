<?php

namespace App\Http\Controllers;

use App\Models\JuegoFisico;
use Illuminate\Http\Request;

class JuegoFisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = JuegoFisico::join('titulos', 'titulo_id', '=', 'titulos.id')->select('juego_fisicos.*','nombre')->orderBy('id', 'desc')->get();
        return response()->json($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $JuegoFisico = JuegoFisico::create([
            // 'titulo' => request('titulo'),
            'titulo_id' => request('titulo_id'),
            'user_id' => request('user_id'),
            'condicion1' => request('condicion1'),
            'consola1' => request('consola1'),
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JuegoFisico  $juegoFisico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $success = $JuegoFisico = JuegoFisico::join('titulos', 'titulo_id', '=', 'titulos.id')->select('juego_fisicos.*','nombre')->where('juego_fisicos.id',$id)->orderBy('id', 'desc')->get();

        return [
             $success[0]
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JuegoFisico  $juegoFisico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $JuegoFisico = JuegoFisico::find($id);


        $success = $JuegoFisico->update([
            'titulo_id' => request('titulo_id'),
            'user_id' => request('user_id'),
            'condicion1' => request('condicion1'),
            'consola1' => request('consola1'),
        ]);
        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JuegoFisico  $juegoFisico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $JuegoFisico = JuegoFisico::find($id);

        $success = $JuegoFisico->delete();

        return [
            'success' => $success
        ];

    }
}
