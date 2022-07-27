<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
        //Conexión con la tabla de la base de datos
        protected $table = "countries";
        //Clave primaria de la tabla
        protected $primaryKey = "country_id";
        //Omitir campos de auditoria
        public $timestamps = false;
    
    use HasFactory;
}
