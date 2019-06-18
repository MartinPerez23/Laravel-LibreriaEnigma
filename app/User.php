<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = true;
    protected $fillable = [
        "nombre","apellido","comentario","email","genero_favorito","habilitado","admin"
    ];

    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    public function getUserNameAttribute(){
        return $this->attributes["user"] ? $this->attributes["user"] : $this->attributes["email"];
    }

    public function setUserAttribute($val){
        $this->attributes["user"] = strtoupper($val);
    }

    public function getHabilitadoAttribute(){
        return $this->attributes["habilitado"] ?  "Si" : "No";
    }

    public function getAdminAttribute(){
        return $this->attributes["admin"] ?  "Si" : "No";
    }

    public function getGeneroFavoritoAttribute($id){
        $query = DB::table('users')->where('id',$id)->first()->genero_favorito;

        $gene = unserialize($query);

        return $gene;
    }

}
