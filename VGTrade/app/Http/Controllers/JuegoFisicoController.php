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
        return JuegoFisico::all();
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
            'condicion' => request('condicion'),
            'consola' => request('consola'),
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
        $success = $JuegoFisico = JuegoFisico::findOrFail($id);
        //return [$juegoFisico];
        return [
             $success
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
        request()->validate([
            'titulo' => 'required',
            'condicion' => 'required',
            'consola' => 'required',
        ]);

        $success = $JuegoFisico->update([
            'titulo' => request('titulo'),
            'condicion' => request('condicion'),
            'consola' => request('consola'),
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
