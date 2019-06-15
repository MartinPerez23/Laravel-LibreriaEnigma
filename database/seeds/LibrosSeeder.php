<?php

use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("libros")->insert([
            [   "nombre"   => "21 Lecciones Para El Siglo Xxi",
                "imagen" => "",
                "id_autor"    => 2,
                "id_editorial" => 2],

            [   "nombre"   => "Aqui Hay Dragones",
                "imagen" => "",
                "id_autor"    => 3,
                "id_editorial" => 3],

            [   "nombre"   => "Caos Nadie Puede Decirte Quien Sos",
                "imagen" => "",
                "id_autor"    => 4,
                "id_editorial" => 4],

            [   "nombre"   => "De Animales A Dioses",
                "imagen"    => "",
                "id_autor"    => 2,
                "id_editorial" => 2],

            [   "nombre"   => "El Cuento De La Criada",
                "imagen" => "",
                "id_autor"    => 5,
                "id_editorial" => 5],

            [   "nombre"   => "Filosofia En 11 Frases",
                "imagen" => "",
                "id_autor"    => 6,
                "id_editorial" => 6],

            [   "nombre"   => "Gravity Falls",
                "imagen" => "",
                "id_autor"    => 7,
                "id_editorial" => 7],

            [   "nombre"   => "Las Hijas Del Capitan",
                "imagen" => "",
                "id_autor"    => 8,
                "id_editorial" => 8],

            [   "nombre"   => "	La Dieta Del Metabolismo Acelerado",
                "imagen" => "",
                "id_autor"    => 9,
                "id_editorial" => 9],

            [   "nombre"   => "La Raiz De Todos Los Males",
                "imagen" => "",
                "id_autor"    => 10,
                "id_editorial" => 8],

            [   "nombre"   => "Masones Argentinos El Poder En Las Sombras",
                "imagen" => "",
                "id_autor"    => 11,
                "id_editorial" => 8],

            [   "nombre"   => "Putita Golosa",
                "imagen" => "",
                "id_autor"    => 12,
                "id_editorial" => 9],

            [   "nombre"   => "Rota, Se Camina Igual",
                "imagen" => "",
                "id_autor"    => 13,
                "id_editorial" => 10],

            [   "nombre"   => "	Salvese Quien Pueda !",
                "imagen" => "",
                "id_autor"    => 14,
                "id_editorial" => 2],

            [   "nombre"   => "Teoria King Kong",
                "imagen" => "",
                "id_autor"    => 15,
                "id_editorial" => 11]]
        );
    }
}
