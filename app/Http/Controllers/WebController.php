<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\carousel;
use App\Models\editorial;
use App\Models\libro;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index(carousel $carousel){
        $carousel = $carousel->all();
        return view("web.index", compact("carousel"));
    }

    public function formulario(){

        return view("web.formulario");

    }

     public function galeria(libro $libro){

        $libros = $libro->where("habilitado",1,1)
                        ->with("Autor", "Editorial")
                        ->orderBy('updated_at',"desc")
                        ->get();
        return view("web.galeria",compact("libros"));
    }


}
