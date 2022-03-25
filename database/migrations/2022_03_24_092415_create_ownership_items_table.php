<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnershipItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownership_items', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->boolean("isRequired")->default(1);
            $table->foreignId("item_type_id")->constrained();
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
        Schema::table('ownership_items', function (Blueprint $table){
          $table->dropForeign("item_type_id");
        });
        Schema::dropIfExists('ownership_items');
    }
}
