<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_imports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('crop_name');
            $table->string('crop_type');
            $table->string('crop_quantity');
            $table->string('crop_location');
            $table->string('bid_rate');
            $table->string('crop_description');
            $table->string('long_description')->nullable();
            $table->date('last_date_bidding');
            $table->string('crop_image');
            $table->string('crop_image2');
            $table->string('views');
            $table->string('condition');
            $table->string('Action');
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
        Schema::dropIfExists('crop_imports');
    }
}
