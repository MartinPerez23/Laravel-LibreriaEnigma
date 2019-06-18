<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre",100);
            $table->string("imagen",100);

            $table->unsignedInteger("id_autor");
            $table->unsignedInteger("id_editorial");
            $table->boolean('habilitado')->default(1);

            $table->foreign("id_autor")->references("id")->on("autores")->onUpdate("cascade")->onDelete("no action");
            $table->foreign("id_editorial")->references("id")->on("editoriales")->onUpdate("cascade")->onDelete("no action");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
