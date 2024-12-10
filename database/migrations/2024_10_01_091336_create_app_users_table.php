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
        Schema::create('app_users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string("password");
            $table->string('phone_number');
            $table->string('remember_token', 100)->nullable();
            $table->string('picture_path')->default('https://static.vecteezy.com/system/resources/previews/009/952/572/non_2x/male-profile-picture-vector.jpg');
            $table->boolean('is_agent')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_users');
    }
};
