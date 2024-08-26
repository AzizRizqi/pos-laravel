<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sales_id');
            $table->unsignedBigInteger('product_id');
            $table->bigInteger('qty');
            $table->bigInteger('sub_total');
            $table->timestamps();

            $table->foreign('sales_id')
            ->references('id')
            ->on('sales')
            ->onDelete('cascade');

            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sales');
    }
};
