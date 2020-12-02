<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('register_as');
            $table->string('username');
            $table->string('email');
            $table->string('mobile');
            $table->string('division');
            $table->string('zip_code');
            $table->string('password');
            $table->string('password_confirm');
            $table->string('profile_pic');
            $table->string('action');
            $table->string('condition');
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
        Schema::dropIfExists('farmer_registers');
    }
}
