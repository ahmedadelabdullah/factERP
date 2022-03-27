<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTexesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texes_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_number');
            $table->foreignId('supplier_id');
            $table->dateTime('date');
            $table->tinyInteger('no_classes')->default(1);
            $table->longText('comment')->nullable();
            $table->unsignedInteger('total_rolls');
            $table->unsignedInteger('total_amount');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('supplier_id')
                  ->on('suppliers')
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
        Schema::dropIfExists('texes_infos');
    }
}
