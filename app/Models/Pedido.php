<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // use HasFactory;
    protected $fillable = ['fecha_solicitud','fecha_entrega','valorTotal','user'];



    public static function search ($query=''){
        if(!$query){
            return self::all();

        }
        return self::where('user', '=', "$query")
        ->get();
    }

}
