<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidosProductos extends Model
{
    //use HasFactory;
    protected $fillable = ['pedido','producto','cantidad','valor'];

    public function productos(){
        return $this->hasmany(Producto::class);
    }

    public static function search ($query=''){
        if(!$query){
            return self::all();

        }
        return self::where('pedido', '=', "$query")
        ->get();
    }

}
