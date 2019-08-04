<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function index(User $usuarios)
    {
        $usuarios = $usuarios->paginate(8);


        return view("panel.usuarios.index")->with("usuarios",$usuarios);

    }

    public function store(Request $request)
    {

        $validaciones = [
            "email" => "required|unique:users,email",
            "nombre" => "required",
            "apellido" => "required",
            "password" => 'required|string|min:4|confirmed',
            "generos" => "required"
        ];

        $mensajes = [
            "email.unique" => "Ese e-mail ya está en uso!",
            "password.confirmed" => "El campo 'Confirmación Contraseña' no coincide con el campo 'Contraseña'"
        ];

        $validator = Validator::make($request->all(),$validaciones,$mensajes);

        if($validator->fails())
            return redirect()->back()->withErrors($validator);

        $comprimido = $request->get("generos");
        $comprimido = serialize($comprimido);
        $mailMinuscula = $request->get("email");
        $mailMinuscula = strtolower($mailMinuscula);
        $contraseña = $request->get("password");
        $contraseña = bcrypt($contraseña);

        $data = $request->except("generos","email","password","password_confirmation");
        $data["genero_favorito"] = $comprimido;
        $data["email"] = $mailMinuscula;
        $data["password"] = $contraseña;

        $user = User::create($data);

        $mensaje = "Gracias por inscribirte ".$data["apellido"]." ".$data["nombre"].", te mandaremos en brevedad un email a: ".$data["email"];

        if($user)
            return redirect()->route("web.index")->with("ok",$mensaje);
    }

}
