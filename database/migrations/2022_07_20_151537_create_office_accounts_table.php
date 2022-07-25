<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('office');
            $table->unsignedBigInteger('payment');
            $table->unsignedBigInteger('add');
            $table->unsignedBigInteger('opposite');
            $table->unsignedBigInteger('retrieved');
            $table->unsignedBigInteger('invoice');
            $table->unsignedBigInteger('calculating');
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
        Schema::dropIfExists('office_accounts');
    }
}
