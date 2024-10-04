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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('en_name');
            $table->string('img');
            $table->text('summary');
            $table->text('description');
            $table->float('score');
            $table->decimal('price');
            $table->tinyInteger('marketable')->comment('0 => not available, 1 => available');
            $table->bigInteger('marketable_number');
            $table->float('weight');
            $table->float('width');
            $table->float('lenght');
            $table->float('height');
            $table->string('slug');
            $table->string('meta_title');
            $table->string('meta_name');
            $table->text('meta__description');
            $table->text('meta_tags');
            $table->text('keywords');
            $table->bigInteger('view');
            $table->string('robots')->default('index, follow');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
