<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->char('sexe');
            $table->date('dateOfBirth');
            $table->string('placeOfBirth');
            $table->string('nationality');
            $table->string('city');
            $table->string('country');
            $table->string('address');
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('idDocument');
            $table->string('numId');
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
        Schema::dropIfExists('clients');
    }
}
