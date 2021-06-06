<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = Oferta::join('juego_fisicos as jf1', 'id_juego_propuesto', '=', 'jf1.id')
            ->join('juego_fisicos as jf2', 'id_juego_ofertado', '=', 'jf2.id')

            ->join('titulos as t1', 't1.id', '=', 'jf1.titulo_id')
            ->join('users as u1', 'u1.id', '=', 'jf1.user_id')

            ->join('titulos as t2', 't2.id', '=', 'jf2.titulo_id')
            ->join('users as u2', 'u2.id', '=', 'jf2.user_id')

            ->select('ofertas.*', 't1.nombre as Titulo_de_JuegoPropuesto','u1.name as Nombre_de_UsuarioProp', 't2.nombre as Titulo_de_JuegoOfertado','u2.name as Nombre_de_UsuarioOfer')
            ->orderBy('id', 'desc')
            ->get();
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
        $Oferta = Oferta::create([
            'id_juego_propuesto' => request('id_juego_propuesto'),
            'id_juego_ofertado' => request('id_juego_ofertado'),
            'estado' => request('estado'),
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
        $success = Oferta::join('juego_fisicos as jf1', 'id_juego_propuesto', '=', 'jf1.id')
            ->join('juego_fisicos as jf2', 'id_juego_ofertado', '=', 'jf2.id')

            ->join('titulos as t1', 't1.id', '=', 'jf1.titulo_id')
            ->join('users as u1', 'u1.id', '=', 'jf1.user_id')

            ->join('titulos as t2', 't2.id', '=', 'jf2.titulo_id')
            ->join('users as u2', 'u2.id', '=', 'jf2.user_id')

            ->select('ofertas.*', 't1.nombre as Titulo_de_JuegoPropuesto','u1.name as Nombre_de_UsuarioProp', 't2.nombre as Titulo_de_JuegoOfertado','u2.name as Nombre_de_UsuarioOfer')
            ->where('ofertas.id',$id)
            ->orderBy('id', 'desc')
            ->get();
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
        $Oferta = Oferta::find($id);
        $success = $Oferta->update([
            'id_juego_propuesto' => request('id_juego_propuesto'),
            'id_juego_ofertado' => request('id_juego_ofertado'),
            'estado' => request('estado'),
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
        $Oferta = Oferta::find($id);
        $success = $Oferta->delete();

        return [
            'success' => $success
        ];

    }
}
