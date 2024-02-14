<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliothequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotheques', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->string('parties');
            $table->date('Date_Seance');
            $table->string('Avocat');

            $table->date('date_dossier')->nullable();
            $table->date('date_insert_dossier')->nullable();
            $table->date('date_back_dossier')->nullable();


            $table->integer('isDeleted')->default(0);

            $table->unsignedBigInteger('seance_id')->nullable();

            $table->foreign('seance_id')->references('id')->on('seances')->onDelete('cascade');

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
        Schema::dropIfExists('bibliotheques');
    }
}
