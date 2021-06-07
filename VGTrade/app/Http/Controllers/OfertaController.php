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
        $array = Oferta::leftjoin('juego_fisicos as jf1', 'id_juego_propuesto', '=', 'jf1.id')
            ->leftjoin('juego_fisicos as jf2', 'id_juego_ofertado', '=', 'jf2.id')

            ->leftjoin('titulos as t1', 't1.id', '=', 'jf1.titulo_id')
            ->leftjoin('users as u1', 'u1.id', '=', 'jf1.user_id')

            ->leftjoin('titulos as t2', 't2.id', '=', 'jf2.titulo_id')
            ->leftjoin('users as u2', 'u2.id', '=', 'jf2.user_id')

            ->select('ofertas.*', 't1.nombre as TituloJuegoPropuesto','u1.name as NombreUsuarioProp','u1.telefono as telefonoPro','u1.email as emailPro','jf1.consola1 as ConsolaJuegoPropuesto','jf1.condicion1 as CondicionJuegoPropuesto',
            't2.nombre as TituloJuegoOfertado','u2.name as NombreUsuarioOfer','u2.telefono as telefonoOf','u2.email as emailOf','jf2.consola1 as ConsolaJuegoOfertado','jf2.condicion1 as CondicionJuegoOfertado',)
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
        $success = Oferta::leftjoin('juego_fisicos as jf1', 'id_juego_propuesto', '=', 'jf1.id')
            ->leftjoin('juego_fisicos as jf2', 'id_juego_ofertado', '=', 'jf2.id')

            ->leftjoin('titulos as t1', 't1.id', '=', 'jf1.titulo_id')
            ->leftjoin('users as u1', 'u1.id', '=', 'jf1.user_id')

            ->leftjoin('titulos as t2', 't2.id', '=', 'jf2.titulo_id')
            ->leftjoin('users as u2', 'u2.id', '=', 'jf2.user_id')

            ->select('ofertas.*', 't1.nombre as TituloJuegoPropuesto','u1.name as NombreUsuarioProp','jf1.consola1 as ConsolaJuegoPropuesto','jf1.condicion1 as CondicionJuegoPropuesto',
            't2.nombre as TituloJuegoOfertado','u2.name as NombreUsuarioOfer','jf2.consola1 as ConsolaJuegoOfertado','jf2.condicion1 as CondicionJuegoOfertado',)
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
