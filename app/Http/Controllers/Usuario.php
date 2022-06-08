<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function cadastrar()
    {
        return view('usuario.cadastro');
    }

    public function salvar(Request $request)
    {   
        dd($request->all());
    }
}
