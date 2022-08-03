<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
     //Conexión con la tabla de la base de datos
     protected $table = "regions";
     //Clave primaria de la tabla
     protected $primaryKey = "region_id";
     //Omitir campos de auditoria
     public $timestamps = false;

    use HasFactory;

    //Relación (Region y Pais 1 a *)
    public function paises(){
        return $this->hasMany(Country::class,'region_id');
    }
    //Relación (Region y Continente * a 1)
    public function continente(){
        return $this->belongsTo(Continent::class,'continent_id');
    }
}
