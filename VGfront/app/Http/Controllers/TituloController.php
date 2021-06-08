<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Titulo;
use Illuminate\Support\Facades\Gate;

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
            Gate::authorize("viewAny", Titulo::class);
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
        Gate::authorize("create", Titulo::class);
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
        Gate::authorize("create", Titulo::class);
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
        Gate::authorize("view", Titulo::class);
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
        Gate::authorize("update", Titulo::class);
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
        Gate::authorize("update", Titulo::class);
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
        Gate::authorize("delete", Titulo::class);
        $titulo= titulo::getTitulobyid($id);

        //var_dump($titulo);
        
        if($titulo != NULL){
            //return  ["result" => "record has been deleted"];

            return redirect('titulo')->with('mensaje','titulo borrado éxitosamente');
        }
        
    }
}
