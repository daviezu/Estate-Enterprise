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
            $table->foreignId('agent_id')->constrained('agents', column: 'agent_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('property_name');
            $table->string('owner');
            $table->integer('price');
            $table->string('location');
            $table->string('address');
            $table->text('description');
            $table->string('picture_path')->nullable();
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
