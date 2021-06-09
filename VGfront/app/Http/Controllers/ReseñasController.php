<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reseñas;

use App\Models\Titulo;

use App\Models\users;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Auth;

class ReseñasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function main_vghome()
    {

        $resenas = reseñas::getResenas_2();

       

        return view("vghome", ["resenas" => $resenas]);


    }

    public function index()
    {
        //

        $resenas= reseñas::getResenas();
 
            return view("resenas.resenas", ["resenas" => $resenas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $titulo = Titulo::getTitulo();
         $usuario = users::getUsuario();

        //return view('resenas.create',["titulo" => $titulo]);
       return view('resenas.create',["usuario" => $usuario, "titulo" => $titulo ]);
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
        $user = auth()->user();
        $email = $user->email;
        $id = $user->id;


        request()->validate([
           
            'id_titulo' => 'required',
            'calificacion' => 'required',
            'descripcion' => 'required',
        ]);

        $resenas = Http::post(env('API_URL').'resenas',[

            
            'id_titulo' => request('id_titulo'),
            'calificacion' => request('calificacion'),
            'descripcion' => request('descripcion'),
            'email' => $email,
        ]);

        return redirect('resenas')->with('mensaje','Reseña agregada con éxito');
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
        //
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

        $response = reseñas::getResenasid($id);

        return redirect('resenas')->with('mensaje','Reseña borrada con éxito');
    }

}
