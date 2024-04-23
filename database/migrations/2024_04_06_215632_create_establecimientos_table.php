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
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_establecimiento');
            $table->string('name', 255);
            $table->string('direccion', 255);
            $table->string('descripcion', 255);
            $table->string('url_imagen', 255);
            $table->decimal('calificacion', 5, 2)->nullable();
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
            $table->timestamps();
            $table->foreign('id_tipo_establecimiento')
            ->references('id') 
            ->on('tipo_establecimientos')
            ->onDelete("cascade")
            ->onUpdate("cascade"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
};
