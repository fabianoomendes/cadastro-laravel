<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Model\Usuario as ModelUsuario;

class Usuario extends Controller
{
    public function salvar(Request $request)
    {
        if (ModelUsuario::cadastrar($request)) {
            return response("ok", 201);
        } else {
            return response("erro", 409);
        }
    }
}
