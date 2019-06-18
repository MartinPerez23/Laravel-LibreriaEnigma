<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
    protected $table = "editoriales";

    protected $primaryKey = "id";

    protected $fillable = ["nombre"];

    public function Libros(){
        return $this->hasMany(libro::class,"id_editorial");
    }
}
