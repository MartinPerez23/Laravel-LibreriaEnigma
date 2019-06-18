<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    protected $table = "carousel";

    protected $primaryKey = "id";

    protected $fillable = ["imagen","habilitado"];

    public function getHabilitadoAttribute(){
        return $this->attributes["habilitado"] ?  "Si" : "No";
    }
}
