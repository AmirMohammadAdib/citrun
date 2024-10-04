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

        Schema::create('cart_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'product_id')->constrained('products')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'user_id')->constrained('users')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'design_id')->constrained('designs')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->bigInteger('number');
            $table->dateTime('creaeted_at');
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
        Schema::dropIfExists('cart_item');
    }
};
