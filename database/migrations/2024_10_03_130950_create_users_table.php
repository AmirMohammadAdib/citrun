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

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('show_name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => deactive, 1 => avtive');
            $table->tinyInteger('role')->default(0)->comment('0 => normal user. 1 => admin');
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
        Schema::dropIfExists('users');
    }
};
