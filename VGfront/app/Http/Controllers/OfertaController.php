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
        $user = auth()->user();
        $email = $user->email;
         //$oferta = Http::get(env('API_URL').'Oferta');
         $juego = Http::get(env('API_URL').'Juegos');
         $array['array'] = $juego->json();
        // return view("ofertas.index",$array);
        return view("ofertas.buscar",$array)->with('email',$email);
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

        //return redirect('ofertas')->with('nuevo','Oferta creada con éxito');

        $id= request('id_juego_propuesto');
        //return redirect('ofertaJuego/'.$id)->with('mensaje','Oferta creada con éxito');
        return redirect('ofertaJuego/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juegofisico = Http::get(env('API_URL').'JuegoFisico/'.$id);
        $array['array'] = $juegofisico->json();
        return view('ofertas.create2',$array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();
        $email = $user->email;

        $juegofisico = Http::get(env('API_URL').'JuegoFisico');
        $oferta = Http::get(env('API_URL').'Oferta/'.$id);
        $array['array'] = $juegofisico->json();
        $array1['oferta'] = $oferta->json();
        //return view('ofertas.edit',$array)->with('id', $id);
        return view('ofertas.edit')->with($array)->with($array1)->with('id', $id)->with('email', $email);
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

        $id1= request('id_juego_propuesto');
        //return redirect('ofertas')->with('nuevo','Oferta agregada con éxito');
        return redirect('ofertaJuego/'.$id1)->with('mensaje','Juego agregado con éxito');

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
        return redirect('ofertas')->with('mensaje','Oferta borrada con éxito');
    }
}
