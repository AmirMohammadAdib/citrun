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

        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->tinyInteger('publiced_design')->default(0)->comment('0 => not allowed to public, 1 => public design');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->foreignId(column: 'user_id')->constrained('users')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'product_id')->constrained('products')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->tinyInteger('status')->default(0)->comment('0 => not final order, 1 => final order');
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
        Schema::dropIfExists('designs');
    }
};
