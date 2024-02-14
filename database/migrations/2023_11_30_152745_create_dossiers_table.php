<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('type_clt')->default('');
            $table->unsignedBigInteger('reference')->nullable()->unique();
            $table->string('couleur')->default('');
            $table->date('date_ref')->nullable();
            $table->unsignedBigInteger('id_clt')->nullable();
            $table->unsignedBigInteger('id_avocat')->nullable();
            $table->string('Adversaire')->nullable();
            $table->string('Adresse_Adversaire')->default('');
            $table->string('avocat_Adversaire')->nullable();
            $table->integer('isArchive')->default(0);
            $table->integer('isDeleted')->default(0);

            $table->string('observation')->default('');
            $table->foreign('id_clt')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('id_avocat')->references('id')->on('avocats')->cascadeOnDelete();

            // $table->foreign('id_clt_enmy')->references('id')->on('users')->cascadeOnDelete();
            // $table->foreign('avocat_enmy')->references('id')->on('avocats')->cascadeOnDelete();

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
        Schema::dropIfExists('dossiers');
    }
}
