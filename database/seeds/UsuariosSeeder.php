<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [   "name"   => "Martin",
                "last_name" => "Perez",
                "comentario" => "soy el admin",
                "email"    => "martin.perez@davinci.edu.ar",
                "password" => '$2y$10$nzjNTkMwpQUw/nv8aqqS5uQtU85oOSJ1kZpG4AatxrqbDG2Q6xc56',
                "genero_favorito" => 'a:1:{i:0;s:7:"Comedia";}',
                "habilitado" => 1,
                "admin" => 1
            ],

            [   "name"   => "Jorge",
                "last_name" => "Lopez",
                "comentario" => "Que buena pagina!!",
                "email"    => "jorge.lopez@davinci.edu.ar",
                "password" => '$2y$10$nzjNTkMwpQUw/nv8aqqS5uQtU85oOSJ1kZpG4AatxrqbDG2Q6xc56',
                "genero_favorito" => 'a:1:{i:0;s:7:"Comedia";}',
                "habilitado" => 1,
                "admin" => 0
            ]]
        );
    }
}
