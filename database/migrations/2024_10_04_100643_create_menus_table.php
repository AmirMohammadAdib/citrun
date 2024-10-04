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

        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('position');
            $table->string('title');
            $table->text('link');
            $table->text('icon');
            $table->foreignId(column: 'parent_id')->constrained('menus')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
