<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrdenTrabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proyecto_id')->unsigned();
            $table->enum('Estado',['Habilitado', 'Deshabilitado'])->default('Habilitado');
            $table->string('Nombre');
            $table->integer('HorasTotales')->default(0);
            $table->integer('Consumidas')->default(0);
            $table->timestamps();

            $table->foreign('proyecto_id')
                    ->references('id')->on('Proyecto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('OrdenTrabajo');
    }
}
