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

        Schema::create('coupon_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'coupon_id')->constrained('coupons')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'order_id')->constrained('orders')->onUpdate(action: 'cascade')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon_order');
    }
};
