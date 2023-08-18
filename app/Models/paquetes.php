<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquetes extends Model
{
    use HasFactory;
    protected $fillable=['idfoto','nombre','tipotiquet','traslados','diasdesalojamiento','alimentacion','capacidaddeequipaje','seguromedico','tour','valor'];
    protected $primaryKey='idpaquete';
}
