<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->timestamps();
            $table->string("photo", 500);
            $table->integer("roomID");
            $table->integer("room_number");
            $table->string("photoTwo", 500)->nullable();
            $table->string("photoThree", 500)->nullable();
            $table->string("photoFour", 500)->nullable();
            $table->string("photoFive", 500)->nullable();
            $table->string("description", 500)->nullable();
            $table->integer("discountPercent")->nullable();
            $table->string("discount", 10);
            $table->string("cancellationPolicy", 500)->nullable();
            $table->string("bed_type", 50);
            $table->integer("room_rate");
            $table->integer("room_offer")->nullable();
            $table->string("room_status", 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
