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

        Schema::create('blog_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'blog_id')->constrained('blogs')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'category_id')->constrained('categories')->onUpdate(action: 'cascade')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_category');
    }
};
