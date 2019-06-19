<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    protected $table = "libros";

    protected $primaryKey = "id";

    protected $fillable = ["nombre","imagen","habilitado","id_autor","id_editorial"];

    public function Autor(){
        return $this->belongsTo(autor::class,"id_autor");
    }
    public function Editorial(){
        return $this->belongsTo(editorial::class,"id_editorial");
    }
    public function getHabilitadoAttribute(){
        return $this->attributes["habilitado"] ?  "Si" : "No";
    }

}
