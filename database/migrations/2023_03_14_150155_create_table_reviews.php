<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_reviews', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->timestamps();
            $table->integer("reviewID");
            $table->string('date', 100);
            $table->string("name", 255);
            $table->string("email", 100);
            $table->string("phone", 50)->nullable();
            $table->string("comment", 500);
            $table->integer("stars");
            $table->string("archived");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reviews');
    }
}
