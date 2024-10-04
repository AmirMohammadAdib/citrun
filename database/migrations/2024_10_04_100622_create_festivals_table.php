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

        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('title');
            $table->text('picture')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => diactive, 1 => active');
            $table->float('percentage');
            $table->string('since');
            $table->string('until');
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
        Schema::dropIfExists('festivals');
    }
};
