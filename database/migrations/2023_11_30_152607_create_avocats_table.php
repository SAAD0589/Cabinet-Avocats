<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvocatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avocats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('LastName')->default('');
            $table->string('Specialise')->default('');
            $table->string('tel')->default('');
            $table->string('email')->unique();
            $table->integer('isDeleted')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Adr')->default('');
            $table->enum('status',['active', 'hanging'])->default('hanging');
            $table->string('comment')->default('');
            $table->rememberToken();
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
        Schema::dropIfExists('avocats');
    }
}
