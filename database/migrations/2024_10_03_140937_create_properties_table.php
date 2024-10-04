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
        Schema::create('property', function (Blueprint $table) {
            $table->id('property_id');
            $table->foreignId('user_id')->constrained(table: 'app_user', column: 'user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('property_name');
            $table->string('address');
            $table->decimal('latitude');
            $table->decimal("longtitude");
            $table->integer('price');
            $table->text('description');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->decimal('area');
            $table->string('property_type');
            $table->string('status');
            $table->string('image_path');
            $table->text('facilities');
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
