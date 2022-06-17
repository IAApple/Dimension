<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ocupacion')->nullable();
            $table->string('estado')->nullable();
            $table->bigInteger('habilidad1')->nullable();
            $table->bigInteger('habilidad2')->nullable();            
            $table->bigInteger('habilidad3')->nullable();
            $table->bigInteger('habilidad4')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('enlace_cot')->nullable();
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
}
