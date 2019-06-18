<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido',100)->nullable();
            $table->string('comentario',200)->nullable();
            $table->string('genero_favorito',300);
            $table->boolean('habilitado')->default(1);
            $table->boolean('admin')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("apellido");
            $table->dropColumn("comentario");
            $table->dropColumn("genero_favorito");
            $table->dropColumn("habilitado");
            $table->dropColumn("admin");
        });
    }
}
