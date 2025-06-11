<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // bigint unsigned auto_increment
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('google_id')->nullable();
            $table->string('token')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('role_id')->default(2); // 1: admin, 2: user
            $table->boolean('is_active')->default(1);
            $table->integer('fb_id')->nullable();
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
