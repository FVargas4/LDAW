<?php

namespace App\Http\Controllers;

use App\Models\JuegoFisico;
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
        return JuegoFisico::all();
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
     * @param  \App\Models\JuegoFisico  $juegoFisico
     * @return \Illuminate\Http\Response
     */
    public function show(JuegoFisico $juegoFisico)
    {
        return $juegoFisico;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JuegoFisico  $juegoFisico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JuegoFisico $juegoFisico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JuegoFisico  $juegoFisico
     * @return \Illuminate\Http\Response
     */
    public function destroy(JuegoFisico $juegoFisico)
    {
        //
    }
}
