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
        Schema::create('properties', function (Blueprint $table) {
            $table->id('property_id');
            $table->foreignId('user_id')->constrained('app_users', column: 'user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('property_name');
            $table->string('slug')->unique();
            $table->string("property_owner");
            $table->bigInteger('price');
            $table->string('address');
            $table->text('location_link');
            $table->json('picture_path')->nullable();
            $table->text('description');
            $table->double("building_size");
            $table->double("land_size");
            $table->string("certificate");
            $table->integer("bedroom");
            $table->integer("bathroom");
            $table->integer("carport");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
