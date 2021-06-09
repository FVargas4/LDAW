<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\JuegoFisico;
use App\Models\User;

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
        $array = JuegoFisico::join('titulos', 'titulo_id', '=', 'titulos.id')
        ->select('juego_fisicos.*','nombre')
        ->orderBy('juego_fisicos.id', 'desc')
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
        $JuegoFisico = JuegoFisico::create([
            'titulo_id' => request('titulo_id'),
            'user_id' => request('user_id'),
            'condicion1' => request('condicion1'),
            'consola1' => request('consola1'),
            'email' => request('email'),
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
        $success = $JuegoFisico = JuegoFisico::join('titulos', 'titulo_id', '=', 'titulos.id')
            ->select('juego_fisicos.*','nombre')
            ->where('juego_fisicos.id',$id)
            ->orderBy('id', 'desc')
            ->where('enOferta',0)
            // ->where('juego_fisicos.id_user',$id)
            ->get();

        return response()->json($success);
        // return [
        //      $success[0]
        // ];
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

        if(request('titulo_id') == null){
            $titulo_id = $JuegoFisico->titulo_id;
        }

        if(request('user_id') == null){
            $user_id = $JuegoFisico->user_id;
        }

        if(request('condicion1') == null){
            $condicion1 = $JuegoFisico->condicion1;
        }

        if(request('consola1') == null){
            $consola1 = $JuegoFisico->consola1;
        }
        if(request('email') == null){
            $email = $JuegoFisico->email;
        }

        $success = $JuegoFisico->update([
            // 'titulo_id' => request('titulo_id'),
            // 'user_id' => request('user_id'),
            // 'condicion1' => request('condicion1'),
            // 'consola1' => request('consola1'),

            'titulo_id' => $titulo_id,
            'user_id' => $user_id,
            'condicion1' => $condicion1,
            'consola1' => $consola1,
            'email' => $email,

            'enOferta' => request('enOferta'),
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
