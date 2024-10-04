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
        Schema::disableForeignKeyConstraints();

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'order_id')->constrained('orders')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'product_id')->constrained('products')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'design_id')->constrained('designs')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->bigInteger('number');
            $table->decimal('final_product_price');
            $table->decimal('final_discount_amount');
            $table->decimal('total_price');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
