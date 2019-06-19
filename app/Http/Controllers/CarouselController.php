<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
    public function index(carousel $carousel)
    {
        $carousel = $carousel->paginate(6);

        return view("panel.carousel.index")->with("carousel",$carousel);
    }
    public function create()
    {
       return view("panel.carousel.formulario");
    }

    public function store(Request $request,carousel $carousel)
    {
        $validaciones = [
            "imagen" => "required|image",
            "habilitado" => "required"
        ];

        $mensajes = [
            "imagen.required" => "La imagen es requerida!"
        ];

        $validacion = Validator::make($request->all(),$validaciones,$mensajes);

        if($validacion->fails())
            return redirect()->back()->withErrors($validacion);


        //busco en la base de datos el ultimo valor de id del carousel y le sumo 1 para ponerle nombre a la imagen
        $numero = $carousel->get("id")->last()->id;
        $numero = $numero + 1;

        $request->imagen->storeAs("carousel",$numero.".".$request->imagen->extension());

        $data = $request->except("imagen");

        $data["imagen"] = "storage/carousel/".$numero.".".$request->imagen->extension();

        $carousel = Carousel::create($data);

        if($carousel)
            return redirect()->route("carousel.index")->with("ok","Carousel creado!");
    }

    public function edit($id, Carousel $carousel)
    {
        $carousel = $carousel->find($id);

        if(!$carousel)
            return redirect()->back()->withErrors("El carousel que se quiere editar no existe");

        return view("panel.carousel.formulario",compact("carousel"));
    }

    public function update(Request $request, $id)
    {
        $carousel = Carousel::find($id);

        if(!$carousel)
            return redirect()->back()->withErrors("El carousel a editar no existe");


        $validaciones = [
            "imagen" => "required",
            "habilitado" => "required"
        ];

        $validar = $request->validate($validaciones);

        $request->imagen->storeAs("carousel",$carousel->id.".".$request->imagen->extension());

        $data = $request->except("imagen");

        $data["imagen"] = "storage/carousel/".$request->id.".".$request->imagen->extension();

        if(!$carousel->update($data))
            return redirect()->back()->withErrors("No se pudo editar el carousel");



        return redirect()->route("carousel.index")->with("ok","El carousel se editó correctamente");
    }

    public function destroy($id)
    {
        $carousel = Carousel::find($id);

        if(!$carousel)
            return redirect()->back()->withErrors("No se encuentra el carousel a eliminar");

        //elimino la imagen tambien
        unlink($carousel->imagen);
        if($carousel->delete())
            return redirect()->route("carousel.index")->with("ok","Se borró el carousel seleccionado");


    }
}
