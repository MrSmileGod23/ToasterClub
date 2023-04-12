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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email',100)->unique();
            $table->string('login',30)->unique();
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('name',80)->nullable();
            $table->string('car',80);
            $table->string('car_body',80)->nullable();
            $table->integer('car_year');
            $table->string('city')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('occupation')->nullable();
            $table->string('vk')->nullable();
            $table->string('discord')->nullable();
            $table->boolean('access_level')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
