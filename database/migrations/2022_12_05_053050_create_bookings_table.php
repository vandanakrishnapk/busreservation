<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedbiginteger('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->unsignedbiginteger('starting_point');
            $table->foreign('starting_point')->references('id')->on('locations')->onDelete('cascade');
            $table->unsignedbiginteger('destination');
            $table->unsignedbiginteger('date');
            $table->foreign('date')->references('id')->on('buses')->onDelete('cascade');
            $table->unsignedbiginteger('status');
            $table->foreign('status')->references('id')->on('transactions')->onDelete('cascade');
            $table->integer('number_of_seats');
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
        Schema::dropIfExists('bookings');
    }
}
