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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Tiêu đề chính (VD: Digital Marketing)
            $table->json('animated_texts')->nullable(); // Chữ động kiểu JSON array
            $table->text('description')->nullable(); // Mô tả ngắn
            $table->string('image')->nullable(); // Ảnh (avatar / banner)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
