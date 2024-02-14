<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTribunalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribunals', function (Blueprint $table) {
            $table->id();
            $table->string('trib_nom');
            $table->unsignedBigInteger('id_type');
            $table->string('Abreviation');
            $table->unsignedBigInteger('id_reg');
            $table->foreign('id_type')->references('id')->on('tribunal_types')->cascadeOnDelete();
            $table->foreign('id_reg')->references('id')->on('regions')->cascadeOnDelete();
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
        Schema::dropIfExists('tribunals');
    }
}
