<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuttingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuttings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_number');
            $table->unsignedBigInteger('no_pieces');
            $table->string('model_name');
            $table->string('materials');
            $table->unsignedInteger('meterage');
            $table->string('cutter');
            $table->string('patronist');
            $table->unsignedInteger('no_rolls')->nullable();
            $table->unsignedInteger('no_colors')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('cuttings');
    }
}
