<?php

use Illuminate\Database\Seeder;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("editoriales")->insert([
            ["nombre"   => "Sin Editorial"],
            ["nombre"   => "Debate"],
            ["nombre"   => "Suma"],
            ["nombre"   => "Sudamericana"],
            ["nombre"   => "Salamandra"],
            ["nombre"   => "Paidos"],
            ["nombre"   => "Disney"],
            ["nombre"   => "Planeta"],
            ["nombre"   => "Grijalbo"],
            ["nombre"   => "Sur"],
            ["nombre"   => "Literatura Random House"]]
        );
    }
}
