<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Editorial;
use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibrosController extends Controller

{

    public function index(Libro $libro)
    {


        $libros = $libro->orderBy('updated_at',"desc")
                        ->paginate(4);

        return view("panel.libros.index")->with("libros",$libros);
    }


    public function create(Autor $autor,Editorial $editorial)
    {

        $autor = $autor->all()->pluck("nombreCompleto","id");
        $editorial = $editorial->all()->pluck("nombre","id");

        return view("panel.libros.formulario",compact("autor","editorial"));
    }

    public function store(Request $request)
    {
        $validaciones = [
            "nombre" => "required|string",
            "imagen" => "required",
            "id_autor" => "required|exists:autores,id",
            "id_editorial" => "required|exists:editoriales,id"
        ];

        $mensajes = [
            "id_autor.required" => "El campo Autores es requerido",
            "id_autor.exists" => "El Autor seleccionado no existe",
            "id_editorial.required" => "El campo Editoriales es requerido",
            "id_editorial.exists" => "La editorial seleccionada no existe"
        ];

        $validacion = Validator::make($request->all(),$validaciones,$mensajes);

        if($validacion->fails())
            return redirect()->back()->withErrors($validacion);

        $request->imagen->storeAs("libros",$request->nombre.".".$request->imagen->extension());

        $data = $request->except("imagen");

        $data["imagen"] = "storage/libros/".$request->nombre.".".$request->imagen->extension();

        $libro = Libro::create($data);
        if($libro)
            return redirect()->route("libros.index")->with("ok","Libro creado!");
    }

    public function edit($id, Libro $libro,Autor $autor,Editorial $editorial)
    {
        $libro = $libro->find($id);
        $autor = $autor->all()->pluck("nombreCompleto","id");
        $editorial = $editorial->all()->pluck("nombre","id");

        if(!$libro)
            return redirect()->back()->withErrors("El libro que se quiere editar no existe");

        return view("panel.libros.formulario",compact("libro","editorial","autor"));
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);

        if(!$libro)
            return redirect()->back()->withErrors("El libro a editar no existe");

        $validaciones = [
            "nombre" => "required|string",
            "imagen" => "",
            "id_autor" => "required|exists:autores,id",
            "id_editorial" => "required|exists:editoriales,id"
        ];

        $mensajes = [
            "id_autor.required" => "El campo Autores es requerido",
            "id_autor.exists" => "El Autor seleccionado no existe",
            "id_editorial.required" => "El campo Editoriales es requerido",
            "id_editorial.exists" => "La editorial seleccionada no existe"
        ];

        $validacion = Validator::make($request->all(),$validaciones,$mensajes);

        if($validacion->fails())
            return redirect()->back()->withErrors($validacion);

        $data = $request->all();

        if(!empty($request->imagen)){
            $request->imagen->storeAs("libros",$request->nombre.".".$request->imagen->extension());
            $data["imagen"] = "storage/libros/".$request->nombre.".".$request->imagen->extension();
        }

        if(!$libro->update($data))
            return redirect()->back()->withErrors("No se pudo editar el libro");

        return redirect()->route("libros.index")->with("ok","El libro se editó correctamente");
    }

    public function destroy($id)
    {
        $libro = Libro::find($id);

        if(!$libro)
            return redirect()->back()->withErrors("No se encuentra el libro a eliminar");
        //elimino la imagen tambien
        unlink($libro->imagen);
        if($libro->delete())
            return redirect()->route("libros.index")->with("ok","Se borró el libro seleccionado");
    }

}
