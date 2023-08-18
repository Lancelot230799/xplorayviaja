<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;
    protected $fillable=['nombre','apellido','identificacion','cargo','fechaingreso'];
    protected $primaryKey='idempleado';
}
