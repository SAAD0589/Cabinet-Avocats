<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutageDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routage_dossiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dossier_Assurance');
            $table->unsignedBigInteger('id_secretary');
            $table->integer('isDeleted')->default(0);
            $table->foreign('id_dossier_Assurance')->references('id')->on('assurances')->onDelete('cascade');
            $table->foreign('id_secretary')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('routage_dossiers');
    }
}
