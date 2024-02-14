<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->date('date_R');
            $table->integer('Num_Doc_R');
            $table->string('judicial_commisioner');
            $table->string('procedure');
            $table->unsignedBigInteger('dossier_id');
            $table->string('trib_reference');
            $table->integer('isDeleted')->default(0);
            $table->enum('status',['done','not_done'])->default('not_done');
            $table->enum('type_dossier',['primary','appellate'])->nullable();
            $table->foreign('dossier_id')->references('id')->on('tribunals_dossiers')->onDelete('cascade');

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
        Schema::dropIfExists('reports');

    }
}
