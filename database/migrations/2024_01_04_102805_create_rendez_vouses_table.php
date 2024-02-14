<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->string('TypeRendezVous');
            $table->unsignedBigInteger('id_clt');
            $table->string('AutrePersonne')->nullable();
            $table->enum('status',['avocat', 'secretary'])->nullable();
            $table->unsignedBigInteger('id_avocat');
            $table->string('DateHeure');
            $table->string('commentaires');
            $table->integer('isDeleted')->default(0);
            $table->foreign('id_clt')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_avocat')->references('id')->on('avocats')->onDelete('cascade');

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
        Schema::dropIfExists('rendez_vouses');
    }
}
