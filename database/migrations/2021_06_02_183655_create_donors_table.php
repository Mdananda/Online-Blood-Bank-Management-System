<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->text('firstName', 64);
            $table->string('email', 128)->unique();
            $table->string('blood_group');
            $table->string('status')->nullable();
            $table->date('birthDate');
            $table->string('phoneNumber', 100)->unique();
            $table->integer('weight');
            $table->string('gender');
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
        Schema::dropIfExists('donors');
    }
}
