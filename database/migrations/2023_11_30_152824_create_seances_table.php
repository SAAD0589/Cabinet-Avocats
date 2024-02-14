<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->date('Date_Seance');
            $table->string('Avocat');
            $table->string('Action');
            $table->string('Action1');
            $table->string('juge');
            $table->string('avocat2');
            $table->string('comment');
            $table->enum('status',['fait', 'populaire'])->default('populaire');
            $table->integer('isDeleted')->default(0);

            $table->unsignedBigInteger('dossier_tr_id')->nullable();

            $table->foreign('dossier_tr_id')->references('id')->on('tribunals_dossiers')->onDelete('cascade');

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
        Schema::dropIfExists('seances');
    }
}
