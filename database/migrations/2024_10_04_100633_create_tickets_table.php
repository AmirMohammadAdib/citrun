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

        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained('users')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->foreignId(column: 'admin_id')->constrained('users')->onUpdate(action: 'cascade')->onDelete('cascade');
            $table->string('subject');
            $table->string('priority');
            $table->tinyInteger('status')->default(0)->comment('0 => unseen, 1 => seen, 2 => answare, 3 => close');
            $table->string('department');
            $table->text('content');
            $table->text('file')->nullable();
            $table->bigInteger('parent_id')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
