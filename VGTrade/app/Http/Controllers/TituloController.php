<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;

//prueba

use App\Models\Post;


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
        return Titulo::getAllTitulos();
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

        $titulo = titulo::create([
            'nombre' => request('nombre'),
            'condicion' => request('condicion'),
            'consola' => request('consola'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        //dd($titulo);

        $titulo=Titulo::findorFail($id);
        //return [$juegoFisico];
        return $titulo;
    


        //return $titulo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $titulo = titulo::find($id);
        request()->validate([
            'nombre' => 'required',
            'condicion' => 'required',
            'consola' => 'required',
        ]);

        $success = $titulo->update([
            'nombre' => request('nombre'),
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
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $device = titulo::findOrFail($id);

        $result =$device->delete();

        if($result){

            return ["result" => "record has been delete"];

        }else{

            return["result"=>"delete operation failed"];
        }

    }
}
