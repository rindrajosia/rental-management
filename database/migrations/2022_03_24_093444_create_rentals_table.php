<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->dateTime("startDate");
            $table->dateTime("endDate");
            $table->foreignId("client_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("rental_status_id")->constrained("rental_status");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rentals', function (Blueprint $table){
           $table->dropForeign(["rental_status_id", "user_id", "client_id"]);
        });

        Schema::dropIfExists('rentals');
    }
}
