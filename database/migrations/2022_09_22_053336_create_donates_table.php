<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->text('Name', 64);
            $table->string('email', 128);
            $table->string('phoneNumber', 100);
            $table->string('gender');
            $table->string('donateAmonut');
            $table->string('token', 64)->unique();
            $table->string('city',52);
            $table->string('current_city',52)->nullable();
            $table->longText('address');
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
        Schema::dropIfExists('donates');
    }
}
