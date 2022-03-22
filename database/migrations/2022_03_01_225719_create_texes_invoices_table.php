<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTexesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texes_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->foreignId('texes_info_id');
            $table->text('image')->nullable();
            $table->string('related_models')->nullable();
            $table->unsignedSmallInteger('Norolls');
            $table->unsignedFloat('unit_price')->default(0);
            $table->unsignedFloat('quantity')->default(0);
            $table->unsignedFloat('price')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('texes_info_id')
                  ->on('texes_infos')
                  ->references('id')
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texes_invoices');
    }
}
