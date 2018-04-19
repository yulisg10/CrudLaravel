<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['nombre', 'fecha', 'edad'];
}
