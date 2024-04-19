<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resenas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_establecimiento');
            $table->unsignedBigInteger('id_user');

            $table->string('resena', 30);
            $table->string('calificacion', 30);
            $table->string('fecha', 50);
            $table->string('estado', 50);
    
            //$table->unsignedBigInteger('id_tipo_establecimiento');
            $table->string('direccion', 100);

            $table->timestamps();
            $table->foreign('id_establecimiento')
            ->references('id') 
            ->on('establecimientos')
            ->onDelete("cascade")
            ->onUpdate("cascade"); 
            $table->foreign('id_user')
            ->references('id') 
            ->on('users')
            ->onDelete("cascade")
            ->onUpdate("cascade"); 
            
        });
    }

//     *
//      * Reverse the migrations.
//      *
//      * @return void
    
    public function down()
    {
        Schema::dropIfExists('resenas');
    }
};
