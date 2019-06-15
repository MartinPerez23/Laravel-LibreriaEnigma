<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',"last_name","comentario",'email','genero_favorito',"habilitado","admin"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // accesors

    public function getUserNameAttribute(){
        return $this->attributes["user"] ? $this->attributes["user"] : $this->attributes["email"];
    }


    // mutator
    public function setUserAttribute($val){
        $this->attributes["user"] = strtoupper($val);
    }

}
