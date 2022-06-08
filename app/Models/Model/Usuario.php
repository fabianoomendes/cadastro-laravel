<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    use HasFactory;

    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limite)
    {
        $sql = self::select([
            "id",
            "nome",
            "email",
            "senha",
            "date_cadastro"
        ])
        ->limit($limite);

        dd($sql->tosql());
    }

    public static function cadastrar(Request $request)
    {
        $sql = self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => DB::raw('NOW()')
        ]);

        dd($sql->toSql(), $request->all());
    }
}
