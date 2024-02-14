<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnuaireTelephoniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annuaire_telephoniques', function (Blueprint $table) {
            $table->id();
            $table->string('QualiteService');
            $table->string('Nomcomplet');
            $table->string('NumeroTelephoneFixe');
            $table->string('telephonePortable');
            $table->string('TypeUtilisateur');
            $table->string('email')->unique();
            // $table->enum('TypeUutilisateur',['admin','secretary'])->nullable();
            $table->integer('isDeleted')->default(0);

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
        Schema::dropIfExists('annuaire_telephoniques');
    }
}
