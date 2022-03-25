<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAuthorisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_authorisation', function (Blueprint $table) {
          $table->foreignId("user_id")->constrained();
          $table->foreignId("authorization_id")->constrained();
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
        Schema::table('user_authorisation', function (Blueprint $table){
          $table->dropForeign(["user_id", "authorization_id"]);
        });
        Schema::dropIfExists('user_authorisation');
    }
}
