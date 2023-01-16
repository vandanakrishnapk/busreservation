<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            $table->string('bus_plate_no');
            $table->string('bus_name'); 
            $table->dateTime('date');
            $table->unsignedbiginteger('capacity');
            $table->foreign('capacity')->references('id')->on('capacities')->onDelete('cascade');  
            $table->unsignedbiginteger('bus_type')->after('date');
            $table->foreign('bus_type')->references('id')->on('bus_types')->onDelete('cascade');                
            $table->unsignedbiginteger('location');
            $table->foreign('location')->references('id')->on('locations')->onDelete('cascade');            
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
        Schema::dropIfExists('buses');  
     
    }
}
