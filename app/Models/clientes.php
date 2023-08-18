<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $fillable=['nombre','apellido','identificacion','telefono','correoelectronico','estadojudicial'];
    protected $primaryKey='idcliente';
}
