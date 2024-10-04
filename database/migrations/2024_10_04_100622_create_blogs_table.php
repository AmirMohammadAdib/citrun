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

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => deaft, 1 => published, 2 =>invalid');
            $table->tinyInteger('close_comment')->default(1)->comment('0 => false, 1 => true');
            $table->tinyInteger('special_blog')->default(0)->comment('0 => false, 1 => true');
            $table->foreignId(column: 'user_id')->constrained('users')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->text('poster')->nullable();
            $table->string('poster_alt')->nullable();
            $table->string('slug');
            $table->string('meta_name')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('keywords')->nullable();
            $table->bigInteger('view')->default(0);
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
