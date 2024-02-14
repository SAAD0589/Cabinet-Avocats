<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTribunalsDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribunals_dossiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tribunal_id')->nullable();
            $table->unsignedBigInteger('dossier_id')->nullable();
            $table->unsignedBigInteger('type_tribunal')->nullable();
            $table->unsignedBigInteger('type_dossier')->nullable();
            $table->string('reference_trib')->default('');
            $table->string('juge')->default('');
            $table->string('sale_num')->default('');
            $table->string('heure')->default('');
            $table->string('jugement')->default('');
            $table->unsignedBigInteger('ville')->nullable();
            $table->string('date_dec')->default('');


            $table->string('prejudice')->default('');
            $table->string('descsentes')->default('');
            $table->string('date_jugement')->default('');

            $table->enum('criminal',['primary','appellate'])->nullable();
            $table->string('txt_dec')->default('');

           $table->foreign('tribunal_id')->references('id')->on('tribunals')->cascadeOnDelete();
           $table->foreign('dossier_id')->references('id')->on('dossiers')->cascadeOnDelete();
           $table->foreign('type_tribunal')->references('id')->on('tribunal_types')->cascadeOnDelete();

           $table->foreign('ville')->references('id')->on('villes')->cascadeOnDelete();
            $table->foreign('type_dossier')->references('id')->on('type_dossiers')->cascadeOnDelete();

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
        Schema::dropIfExists('tribunals_dossiers');
    }
}
