<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccination', function (Blueprint $table) {
    
            $table->id();
            $table->unsignedBigInteger('registration_id');
			$table->foreign('registration_id')
				->references('id')
				->on('registrations')
				->onDelete('cascade');
            $table->string('vaccinated');
            $table->string('brand');
            $table->string('firstDose');
            $table->string('provider1');
            $table->string('secondDose');
            $table->string('provider2');
            $table->string('booster');
            $table->string('provider3');
            $table->string('boosterDate');
            $table->string('reason');
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
        Schema::dropIfExists('vaccination');
    }
};
