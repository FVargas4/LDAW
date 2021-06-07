<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\Titulo;
use App\Models\JuegoFisico;


class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$oferta = Http::get(env('API_URL').'Oferta');
         $juego = Http::get(env('API_URL').'JuegoFisico');
         $array['array'] = $juego->json();
        // return view("ofertas.index",$array);
        return view("ofertas.buscar",$array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$juegofisico = JuegoFisico::all();
        $juegofisico = Http::get(env('API_URL').'JuegoFisico');
        $array['array'] = $juegofisico->json();
        return view('ofertas.create',$array);
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
            'id_juego_propuesto' => 'required',
            'estado' => 'required',
        ]);
        $Oferta = Http::post(env('API_URL').'Oferta',[
            'id_juego_propuesto' => request('id_juego_propuesto'),
            'estado' => request('estado'),
        ]);

        return redirect('ofertas')->with('nuevo','Oferta creada con éxito');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $juegofisico = Http::get(env('API_URL').'JuegoFisico');
        $oferta = Http::get(env('API_URL').'Oferta/'.$id);
        $array['array'] = $juegofisico->json();
        $array1['oferta'] = $oferta->json();
        //return view('ofertas.edit',$array)->with('id', $id);
        return view('ofertas.edit')->with($array)->with($array1)->with('id', $id);
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
        request()->validate([
            'id_juego_propuesto' => 'required',
            'estado' => 'required',
        ]);
     
        $Oferta = Http::put(env('API_URL').'Oferta/'.$id,[
            'id_juego_propuesto' => request('id_juego_propuesto'),
            'id_juego_ofertado' => request('id_juego_ofertado'),
            'estado' => request('estado'),
        ]);

        return redirect('ofertas')->with('nuevo','Juego agregado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $juegoFisico = Http::delete(env('API_URL').'Oferta/'.$id);
        return redirect('ofertas')->with('eliminado','Oferta borrada con éxito');
    }
}
