<?php

use Illuminate\Database\Seeder;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("autores")->insert([
            ["nombreCompleto"   => "Anónimo"],
            ["nombreCompleto"   => "Yuval Noah Harari"],
            ["nombreCompleto"   => "Florencia Bonelli"],
            ["nombreCompleto"   => "Magali Tajes"],
            ["nombreCompleto"   => "Margaret Atwood"],
            ["nombreCompleto"   => "Dario Sztajnszrajber"],
            ["nombreCompleto"   => "Alex Wisrch"],
            ["nombreCompleto"   => "Maria Dueñas"],
            ["nombreCompleto"   => "Haylie Pomroy"],
            ["nombreCompleto"   => "Hugo Alconada Mon"],
            ["nombreCompleto"   => "Mariano Hamilton"],
            ["nombreCompleto"   => "Luciana Peker"],
            ["nombreCompleto"   => "Lorena Pronsky"],
            ["nombreCompleto"   => "Andrés Oppenheimer"],
            ["nombreCompleto"   => "Virginie Despentes"]]
        );
    }
}
