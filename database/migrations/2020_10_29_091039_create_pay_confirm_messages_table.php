<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayConfirmMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_confirm_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('crop_id');
            $table->string('f_username');
            $table->string('crop_name');
            $table->string('cust_username');
            $table->string('account_pay');
            $table->string('confirm_price');
            $table->string('message');
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
        Schema::dropIfExists('pay_confirm_messages');
    }
}
