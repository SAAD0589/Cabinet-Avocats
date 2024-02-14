<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('LastName')->default('');
            $table->string('nom_Agence')->default('');
            $table->string('RC')->default('');
            $table->string('ICE')->default('');
            $table->string('images')->default('');
            $table->string('cin')->default('');
            $table->string('passport')->default('');
            $table->string('email')->unique();
            $table->integer('role')->default(0);
            $table->integer('isDeleted')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('Adjectifs',['admin','secretary'])->nullable();
            $table->string('type_clt')->default('');
            $table->string('Tel_Portable')->default('');
            $table->string('Tel_Fix')->default('');
            $table->string('Tel_Portable_2')->default('');
            $table->string('Fax')->default('');
            $table->enum('status',['active', 'hanging'])->default('hanging');
            $table->string('city')->default('');
            $table->string('Adr')->default('');
            $table->string('Adr2')->default('');
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
        Schema::dropIfExists('users');
    }
};
