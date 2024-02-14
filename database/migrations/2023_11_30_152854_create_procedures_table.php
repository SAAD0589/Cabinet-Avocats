<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seance_id')->nullable();
            $table->unsignedBigInteger('dossier_tr_id')->nullable();
            $table->string('procedure_name');
            $table->unsignedBigInteger('incharage')->nullable();
            $table->string('procedure_type');
            $table->date('date_procedure')->default(DB::raw('CURRENT_DATE()'));;
            $table->enum('status',['done', 'not_done'])->default('not_done');
            $table->string('resp_remarque');
            $table->date('date_responsable');
            $table->integer('isDeleted')->default(0);

            $table->foreign('seance_id')->references('id')->on('seances')->onDelete('cascade');
            $table->foreign('dossier_tr_id')->references('id')->on('tribunals_dossiers')->onDelete('cascade');
            $table->foreign('incharage')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('procedures');
    }
}
