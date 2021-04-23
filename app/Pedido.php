<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = ['id_pedido','numero_mesa', 'id_usuario', 'total','impuesto', 'eliminado'];
}
