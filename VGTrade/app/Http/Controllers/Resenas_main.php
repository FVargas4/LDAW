<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\Request;

class Resenas_main extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Resena::getName_3();

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resenas  $resenas
     * @return \Illuminate\Http\Response
     */
    public function show(Resena $resenas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resenas  $resenas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resena $resenas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resenas  $resenas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resena $resenas)
    {
        //
    }
}
