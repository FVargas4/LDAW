<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuario.index');
    }

    public function edit($id)
    {
      //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy()
    {
        //
    }

}
