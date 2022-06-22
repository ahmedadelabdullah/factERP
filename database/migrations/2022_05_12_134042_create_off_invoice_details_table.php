<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('off_invoice_details', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->foreignId('office_invoices_id');
            $table->string('related_models')->nullable();
            $table->unsignedSmallInteger('quantity');
            $table->unsignedFloat('unit_price')->default(0);
            $table->unsignedFloat('price')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('office_invoices_id')
                ->on('office_invoices')
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
        Schema::dropIfExists('off_invoice_details');
    }
}
