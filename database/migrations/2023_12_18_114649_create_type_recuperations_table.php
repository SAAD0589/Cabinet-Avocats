<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeRecuperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_recuperations', function (Blueprint $table) {
            $table->id();
            $table->enum(
            'Name_Recuperation',
            [
                'Mise_demeure',
                'Procedure_restitution_vehicule',
                'Injonction_payerAssignation_paiement',
                'Saisie_conservatoire_bien_meubles',
                'Saisie_arret_compte_bancaire_salaire'
             ])->nullable();

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
        Schema::dropIfExists('type_recuperations');
    }
}
