<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->unsignedBigInteger('invoice_number');
            $table->unsignedBigInteger('no_models');
            $table->foreignId('dress_id');
            $table->foreignId('office_id');
            $table->date('date');
            $table->longText('comment')->nullable();
            $table->unsignedInteger('total_quantity');
            $table->unsignedInteger('sub_total');
            $table->unsignedInteger('total_amount');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('dress_id')
                ->on('dresses')
                ->references('id')
                ->OnDelete('cascade');

            $table->foreign('office_id')
                ->on('offices')
                ->references('id')
                ->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_invoices');
    }
}
