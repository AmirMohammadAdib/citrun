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

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->text('description');
            $table->string('cover')->nullable();
            $table->foreignId(column: 'parent_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('slug');
            $table->string('meta_title');
            $table->string('meta_name');
            $table->text('meta_description');
            $table->text('meta_tags');
            $table->text('keywords');
            $table->bigInteger('view');
            $table->string('robots')->default('index, follow');
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
        Schema::dropIfExists('categories');
    }
};
