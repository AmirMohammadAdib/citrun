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

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('commentable');
            $table->bigInteger('commentable_id');
            $table->string('subject');
            $table->text('content');
            $table->tinyInteger('status')->default(0)->comment('0 => unseen, 1 => seen, 2 => accept, 3 => trash');
            $table->foreignId(column: 'parent_id')->constrained('comments')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'user_id')->constrained('users')->onUpdate(action: 'cascade')->onDelete('cascade');
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
        Schema::dropIfExists('comments');
    }
};
