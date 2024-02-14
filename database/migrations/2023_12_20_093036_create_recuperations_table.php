<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecuperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuperations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_clt');
            $table->unsignedBigInteger('id_type_dossier');
            $table->integer('reference')->nullable();
            $table->string('enmy')->nullable();
            $table->date('date_Rec')->nullable();
            $table->string('name_Rec')->nullable();
            $table->string('num_Rec')->nullable();
            $table->string('adr_Rec')->nullable();
            $table->unsignedBigInteger('id_ville')->nullable();
            $table->unsignedBigInteger('id_trib')->nullable();
            $table->unsignedBigInteger('id_userOffice')->nullable();

            $table->unsignedBigInteger('id_type_recs')->nullable();
            $table->integer('isDeleted')->default(0);

            $table->foreign('id_clt')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_type_dossier')->references('id')->on('type_dossiers')->onDelete('cascade');

            $table->foreign('id_ville')->references('id')->on('villes')->onDelete('cascade');

            $table->foreign('id_trib')->references('id')->on('tribunals')->onDelete('cascade');
            $table->foreign('id_userOffice')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_type_recs')->references('id')->on('type_recuperations')->onDelete('cascade');
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
        Schema::dropIfExists('recuperations');
    }
}
