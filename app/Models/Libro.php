<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    protected $table = "libros";

    protected $primaryKey = "id";

    protected $fillable = ["nombre","imagen","habilitado","id_autor","id_editorial"];

}
