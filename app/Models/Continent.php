<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //Conexión con la tabla de la base de datos
    protected $table = "continents";
    //Clave primaria de la tabla
    protected $primaryKey = "continent_id";
    //Omitir campos de auditoria
    public $timestamps = false;



    use HasFactory;
}
