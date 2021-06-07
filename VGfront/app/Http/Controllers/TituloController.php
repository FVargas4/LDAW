<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Titulo;

use Illuminate\Support\Facades\Http;


class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $titulo = Titulo::getTitulo();
 
            return view("titulo.titulo", ["titulo" => $titulo]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('titulo.create');
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
        $titulo = Http::post(env('API_URL').'titulo',[
            'nombre' => request('nombre'),
            'condicion' => request('condicion'),
            'consola' => request('consola'),
        ]);


        //dd($titulo)

        return redirect('titulo')->with('mensaje','titulo agregado con éxito');
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
        
        $titulo = Http::get(env('API_URL').'titulo/'.$id);
        $array['array'] = $titulo->json();
        return view("titulo.show",$array);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $titulo = Titulo::findtitulo_id($id);

    
        //dd($titulo);
        
        //arreglo asociativo 
        
        return view('titulo.edit',['titu'=>$titulo]);
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

        $titulo = Http::put(env('API_URL').'titulo/'.$id,[
            'nombre' => request('nombre'),
            'condicion' => request('condicion'),
            'consola' => request('consola'),
        ]);

        //dd($titulo);
        return redirect('titulo')->with('mensaje','Titulo agregado con éxito');
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
        $titulo= titulo::getTitulobyid($id);

        //var_dump($titulo);
        
        if($titulo != NULL){
            //return  ["result" => "record has been deleted"];

            return redirect('titulo')->with('mensaje','titulo borrado éxitosamente');
        }
        
    }
}
