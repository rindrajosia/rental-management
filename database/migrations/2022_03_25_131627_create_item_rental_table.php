<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_rental', function (Blueprint $table) {
            $table->foreignId("item_id")->constrained();
            $table->foreignId("rental_id")->constrained();
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
        Schema::table('item_rental', function (Blueprint $table){
          $table->dropForeign(["item_id", "rental_id"]);
        });
        Schema::dropIfExists('item_rental');
    }
}
