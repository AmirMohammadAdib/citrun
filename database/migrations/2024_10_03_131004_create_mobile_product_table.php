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

        Schema::create('mobile_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'mobile_id')->constrained('mobiles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId(column: 'product_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_product');
    }
};
