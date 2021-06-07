<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\Request;

class ResenasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return Resena::getName();
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
           
        $resena = Resena::create([
            'id_user' => request('id_user'),
            'id_titulo' => request('id_titulo'),
            'calificacion' => request('calificacion'),
            'descripcion' => request('descripcion'),
        ]);

         //return Resenas::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resenas  $resenas
     * @return \Illuminate\Http\Response
     */
    public function show(Resena $id)
    {
        //

        $resena=Resena::findorFail($id);
        //return [$juegoFisico];
        return $resena;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resenas  $resenas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $resenas = Resena::find($id);
        request()->validate([
            'id_user' => request('id_user'),
            'id_titulo' => request('id_titulo'),
            'calificacion' => request('calificacion'),
            'descripcion' => request('descripcion'),
           
        ]);
          
        

        $success = $resenas->update([
            'id_user' => request('id_user'),
            'id_titulo' => request('id_titulo'),
            'calificacion' => request('calificacion'),
            'descripcion' => request('descripcion'),
            
        ]);
        return [
            'success' => $success
        ];
        



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resenas  $resenas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $device = Resena::findOrFail($id);

        $result =$device->delete();

        if($result){

            return ["result" => "record has been delete"];

        }else{

            return["result"=>"delete operation failed"];
        }
    }
}
