<?php

namespace App\Http\Controllers;

use App\Models\Model\Usuario as ModelUsuario;
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
        $request->validate([
            "nome" => "required",
            "email" => "required|email|unique:usuario,email",
            "senha" => "min:5"
        ]);

        if (ModelUsuario::cadastrar($request)) {
            return view('usuario.sucesso', [
                'fulano' => $request->input('nome')
            ]);
        } else {
            echo "Ops! Falhou ao cadastrar!";
        }

    }
}
