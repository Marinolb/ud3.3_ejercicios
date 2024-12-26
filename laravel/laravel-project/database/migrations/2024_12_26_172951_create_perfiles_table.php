<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilesTable extends Migration
{
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->text('biografia');

            $table->foreign('usuario_id')->references('id')->on('alumnos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
}
