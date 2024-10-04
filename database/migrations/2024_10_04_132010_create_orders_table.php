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

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained('users')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'address_id')->constrained('addresses')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->text('address_object')->nullable();
            $table->foreignId(column: 'payment_id')->constrained(table: 'payments')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->text('payment_object')->nullable();
            $table->tinyInteger('payment_status')->comment('0 => not paid, 1 => paid');
            $table->foreignId(column: 'delivery_id')->constrained(table: 'deliveries')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->text('delivery_object')->nullable();
            $table->decimal('delivery_amount')->nullable();
            $table->tinyInteger('delivery_status')->comment('0 => not send, 1 => sending, 2 => sent, 3 => delivered');
            $table->decimal('order_final_amount')->nullable();
            $table->decimal('order_discount_amount')->nullable();
            $table->foreignId( 'coupon_id')->constrained( 'coupons')->onUpdate( 'cascade')->onDelete('cascade');
            $table->text('coupon_object')->nullable();
            $table->tinyInteger('order_status')->comment('0 => not check, 1 => checking, 2 => not confirmed, 3 => confirmed, 4 => canceled, 5 => returned');
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
        Schema::dropIfExists('orders');
    }
};
