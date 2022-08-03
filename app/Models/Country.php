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

    //Relación (Region y Continente * a 1)
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }
    //Relación con idiomas(* a *)
    public function idiomas(){
        return $this->belongsToMany(Language::class,'country_languages','country_id','language_id');
    }
}
