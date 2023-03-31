<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('categoria_id')->unsigned();
            $table->string("nombre");
            $table->timestamps();

            /*Relacion con categorias*/
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            //Se dice que la categoria_id de la tabla libros esta relacionada con el id de la tabla categorias y se elimina de forma de cascada
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
