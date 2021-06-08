<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\Titulo;
use App\Models\JuegoFisico;


class OfertaJuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oferta = Http::get(env('API_URL').'Oferta');
        $array['array'] = $oferta->json();
        return view("ofertas.index",$array);
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

        $id= request('id_juego_propuesto');
        // return redirect('juegofisico/'.$id)->with('mensaje','Oferta creada con éxito');
        return redirect('juegofisico/'.$id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = Titulo::getTitulo();
        $juegoFisico = Http::get(env('API_URL').'JuegoFisico/'.$id);
        $ofertaA = Http::get(env('API_URL').'OfertaUsuario/'.$id);
        //$ofertaA = Http::get(env('API_URL').'OfertaJuego/'.$id);

        $oferta['oferta'] = $ofertaA->json();
        $array['array'] = $juegoFisico->json();
        //dd($oferta);
        return view("ofertas.oferta",$array,$oferta,["titulo" => $titulo])->with('id', $id)->with('mensaje','Juego agregado con éxito');
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

        $id1= request('id_juego_propuesto');
        return redirect('juegofisico/'.$id1)->with('mensaje','Operación éxitosa');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oferta = Http::get(env('API_URL').'Oferta/'.$id);
        $array1['oferta'] = $oferta->json();
        //dd($array1[]);
        $juegoFisico = Http::delete(env('API_URL').'Oferta/'.$id);
        return redirect('juegofisico')->with('mensaje','Oferta borrada con éxito');
    }
}
