<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //Conexión con la tabla de la base de datos
    protected $table = "languages";
    //Clave primaria de la tabla
    protected $primaryKey = "language_id";
    //Omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;

    //Relación con paises (* a *)
    public function paises(){
        return $this->belongsToMany(Country::class,'country_languages','language_id','country_id');
    }
}
