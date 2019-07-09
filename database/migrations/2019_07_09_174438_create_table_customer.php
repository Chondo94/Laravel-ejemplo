<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) { // el nombre de nuestras tablas debe de ir en plural.
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('address', 50);
            $table->string('phone_number', 50);
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
        Schema::dropIfExists('customers');// el nombre de nuestras tablas debe de ir en plural.
    }
}
