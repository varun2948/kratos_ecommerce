<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('blood_type', 255)->nullable();
            $table->string('latitude', 255)->nullable();
            $table->string('longitude', 255)->nullable();
            $table->string('birth_year', 20)->nullable();
            $table->string('gender', 255)->nullable();
            $table->longText('token')->unllable();

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
        Schema::dropIfExists('register_user');
    }
}
