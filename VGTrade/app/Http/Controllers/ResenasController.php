<?php

namespace App\Http\Controllers;

use App\Models\Resenas;
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
        
        return Resenas::getAllResenas();
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
    public function show(Resenas $resenas)
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
    public function update(Request $request, Resenas $resenas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resenas  $resenas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resenas $resenas)
    {
        //
    }
}
