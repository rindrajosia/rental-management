<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOwnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_ownership', function (Blueprint $table) {
          $table->foreignId("item_id")->constrained();
          $table->foreignId("ownership_item_id")->constrained();
          $table->timestamps();
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
        Schema::table('item_ownership', function (Blueprint $table){
          $table->dropForeign(["item_id", "ownership_item_id"]);
        });
        Schema::dropIfExists('item_ownership');
    }
}
