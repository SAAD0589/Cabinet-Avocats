<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartieAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partie_assurances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_assurances')->nullable();
            $table->string('Assure')->nullable();
            $table->string('RevendicationsMatiereDroitsCiviques')->nullable();
            $table->string('AutreCompagnieAssurance')->nullable();
            $table->foreign('id_assurances')->references('id')->on('assurances')->onDelete('cascade');
            
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
        Schema::dropIfExists('partie_assurances');
    }
}
