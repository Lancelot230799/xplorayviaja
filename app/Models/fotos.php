<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
    use HasFactory;
    protected $fillable=['resolucion','tamaño'];
    protected $primaryKey='idfoto';
}