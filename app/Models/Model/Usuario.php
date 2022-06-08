<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
            "data_cadastro" => $request->input('data_cadastro'),
            "data_cadastro" => DB::raw('NOW()')
            
        ]);

        dd($sql->toSql(), $request->all());
    }
}
