<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    protected $table = "autores";

    protected $primaryKey = "id";

    protected $fillable = ["nombreCompleto"];

    public function Libros(){
        return $this->hasMany(libro::class,"id_autor");
    }
}
