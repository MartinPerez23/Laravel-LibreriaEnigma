<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\editorial;
use App\Models\libro;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index(){
        return view("web.index");
    }


    public function formulario(){
        return view("web.formulario");

    }


    public function galeria(Autor $autor, Editorial $editorial, Libro $libro){
        /*
         Cuando me traigo todo un modelo, tengo una forma de pedirle que me traiga tambien sus relaciones (si las voy a usar, es lo más optimo)

        Con el método ->with("relaciones") del modelo ->get()
         */
        $libro = $libro->with("Autor", "Editorial")->get();

        dd($libro);
//        $tipoHabitaciones = [];

        // devolvemos la vista con los tipoHabitaciones
        return view("web.habitaciones",compact("tipoHabitaciones"));
    }
}
