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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id');
            $table->string('gender');
            $table->integer('age');
            $table->timestamps();
        });

        Schema::create('limitation_set_person', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('limitation_set_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('limitation_set_person');
        Schema::dropIfExists('people');
    }
};
