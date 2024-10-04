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

        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('site_title');
            $table->bigInteger('site_description');
            $table->bigInteger('keywords');
            $table->bigInteger('logo');
            $table->bigInteger('icon');
            $table->bigInteger('address');
            $table->bigInteger('geography_lenght');
            $table->bigInteger('geography_width');
            $table->bigInteger('postal_code');
            $table->bigInteger('phone');
            $table->bigInteger('manager_phone');
            $table->bigInteger('manager_mail');
            $table->bigInteger('city_id');
            $table->bigInteger('created_at');
            $table->bigInteger('cache_reset');
            $table->bigInteger('updated_at');
            $table->bigInteger('deleted_at');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
