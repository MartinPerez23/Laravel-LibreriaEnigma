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
                "imagen" => "libros/21_lecciones_para_el_siglo_xxi.png",
                "id_autor"    => 2,
                "id_editorial" => 2],

            [   "nombre"   => "Aqui Hay Dragones",
                "imagen" => "libros/aqui_hay_dragones.png",
                "id_autor"    => 3,
                "id_editorial" => 3],

            [   "nombre"   => "Caos Nadie Puede Decirte Quien Sos",
                "imagen" => "libros/caos_nadie_puede_decirte_quien_sos.png",
                "id_autor"    => 4,
                "id_editorial" => 4],

            [   "nombre"   => "De Animales A Dioses",
                "imagen"    => "libros/de_animales_a_dioses.png",
                "id_autor"    => 2,
                "id_editorial" => 2],

            [   "nombre"   => "El Cuento De La Criada",
                "imagen" => "libros/el_cuento_de_la_criada.png",
                "id_autor"    => 5,
                "id_editorial" => 5],

            [   "nombre"   => "Filosofia En 11 Frases",
                "imagen" => "libros/filosofia_en_11_frases.png",
                "id_autor"    => 6,
                "id_editorial" => 6],

            [   "nombre"   => "Gravity Falls",
                "imagen" => "libros/gravity_falls.png",
                "id_autor"    => 7,
                "id_editorial" => 7],

            [   "nombre"   => "Las Hijas Del Capitan",
                "imagen" => "libros/las_hijas_del_capitan.png",
                "id_autor"    => 8,
                "id_editorial" => 8],

            [   "nombre"   => "	La Dieta Del Metabolismo Acelerado",
                "imagen" => "libros/la_dieta_del_metabolismo_acelerado.png",
                "id_autor"    => 9,
                "id_editorial" => 9],

            [   "nombre"   => "La Raiz De Todos Los Males",
                "imagen" => "libros/la_raiz_de_todos_los_males.png",
                "id_autor"    => 10,
                "id_editorial" => 8],

            [   "nombre"   => "Masones Argentinos El Poder En Las Sombras",
                "imagen" => "libros/masones_argentinos_el_poder_en_las_sombras.png",
                "id_autor"    => 11,
                "id_editorial" => 8],

            [   "nombre"   => "Putita Golosa",
                "imagen" => "libros/putita_golosa.png",
                "id_autor"    => 12,
                "id_editorial" => 9],

            [   "nombre"   => "Rota, Se Camina Igual",
                "imagen" => "libros/rota,_se_camina_igual.png",
                "id_autor"    => 13,
                "id_editorial" => 10],

            [   "nombre"   => "	Salvese Quien Pueda !",
                "imagen" => "libros/salvese_quien_pueda_!.png",
                "id_autor"    => 14,
                "id_editorial" => 2],

            [   "nombre"   => "Teoria King Kong",
                "imagen" => "libros/teoria_king_kong.png",
                "id_autor"    => 15,
                "id_editorial" => 11]]
        );
    }
}
