<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('image');
            $table->string('age');
            $table->string('blood_group');
            $table->string('phone_number');
            $table->string('email');
            $table->string('village');
            $table->string('district');
            $table->string('post_code');
            $table->string('city');
            $table->string('country');
            $table->string('occupation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}