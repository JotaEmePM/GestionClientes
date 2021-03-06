<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Codigo', 10)->unique();
            $table->string('Nombre');
            $table->enum('Estado', ['Creado','Desarrollo','Cerrado'])->default('Creado');
            $table->integer('cliente_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();

            $table->foreign('cliente_id')
                    ->references('id')->on('Cliente');

            $table->foreign('usuario_id')
                    ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Proyectos');
    }
}
