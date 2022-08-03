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

    //Relacion (Continente y region)
    public function regiones(){
        return $this->hasMany(Region::class,'continent_id');
    }

    //Relacion (Continente y Pais, Ancestro nieto)
    public function paises(){
        return $this->hasManyThrough(Region::class, Country::class, 'continent_id', 'region_id', 'continent_id', 'region_id');
    }
}
