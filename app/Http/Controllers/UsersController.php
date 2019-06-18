<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
        public function store(Request $request)
    {

        $validaciones = [
            "email" => "required|unique:users,email",
            "nombre" => "required",
            "apellido" => "required",
            "generos" => "required"
        ];

        $mensajes = [
            "email.unique" => "Ese e-mail ya está en uso!",

        ];

        $validator = Validator::make($request->all(),$validaciones,$mensajes);

        if($validator->fails())
            return redirect()->back()->withErrors($validator);

        $comprimido = $request->get("generos");
        $comprimido=serialize($comprimido);
        $mailMinuscula = $request->get("email");
        $mailMinuscula = strtolower($mailMinuscula);
        $data = $request->except("generos","email");
        $data["genero_favorito"]= $comprimido;
        $data["email"]= $mailMinuscula;
        $user = User::create($data);

        $mensaje = "Gracias por inscribirte ".$data["apellido"]." ".$data["nombre"]." ,te mandaremos en brevedad un email a: ".$data["email"];

        if($user)
            return redirect()->route("web.index")->with("ok",$mensaje);
    }

}
