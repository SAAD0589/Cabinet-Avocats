<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolderRecuperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folder_recuperations', function (Blueprint $table) {
            $table->id();
            $table->string('Lettre_transmission_dossier')->nullable();
            $table->string('Contrat_credit')->nullable();
            $table->string('Releve_compte')->nullable();
            $table->string('Tableau_damortissement')->nullable();
            $table->string('Copie_CIN')->nullable();
            $table->string('PV_vente_vehicule')->nullable();
            $table->string('Reconnaissance_dette')->nullable();
            $table->string('Acte_davalCautionnement_solidaire')->nullable();
            $table->string('Registre_commerce')->nullable();
            $table->string('Attestation_salaireAttestationTravail')->nullable();
            $table->string('Ordre_Prelevement_PermanentIrrevocable')->nullable();
            $table->string('Contra_dhypotheque_cautionnement_hypothecaire')->nullable();
            $table->string('Copie_statuts')->nullable();
            $table->string('PV_AGE')->nullable();
            $table->string('Facture_tel_Electricite')->nullable();
            $table->string('Certificat_residence')->nullable();
            $table->string('Protocole_daccord')->nullable();
            $table->string('Contrat_subrogation_contrat_LOA_Contrat_Mourabaha')->nullable();
            $table->string('Nantissement_fond_commerce')->nullable();
            $table->string('Recepisse_depot_declaration_mise_circulation_provisoire')->nullable();
            $table->string('Certificat_propriete')->nullable();
            $table->string('Contrat_bail')->nullable();
            $table->string('Specimen_cheque')->nullable();
            $table->string('RIB')->nullable();
            $table->string('Autres_1')->nullable();
            $table->string('Autres_2')->nullable();


            $table->unsignedBigInteger('id_rec')->nullable();;
            $table->foreign('id_rec')->references('id')->on('recuperations')->onDelete('cascade');

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
        Schema::dropIfExists('folder_recuperations');
    }
}
