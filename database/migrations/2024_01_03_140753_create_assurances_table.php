<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_clt')->nullable();
            $table->string('reference')->nullable();
            $table->string('Date_Reception_Dossier')->nullable();
            $table->enum('Methode_Affectation',['InstallationSeance','Cession_Par_Client'])->nullable();
            $table->integer('isDeleted')->default(0);
            $table->integer('isFirst')->default(0);
            $table->string('NumeroRapportPoliceJudiciaire')->nullable();
            $table->string('MinisterePublicNon')->nullable();
            $table->string('Suivi_M_AgentRoi')->nullable();
            $table->string('NumeroDossier')->nullable();
            $table->unsignedBigInteger('id_tribunals')->nullable();
            $table->foreign('id_clt')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_tribunals')->references('id')->on('tribunals')->onDelete('cascade');
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
        Schema::dropIfExists('assurances');
    }
}
