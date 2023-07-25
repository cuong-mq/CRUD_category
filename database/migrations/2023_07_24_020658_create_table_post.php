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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // Cột khóa ngoại liên kết đến bảng categories
            $table->string('name', 515);
            $table->string('slug', 1024);
            $table->text('description');
            $table->text('content');
            $table->timestamps();

            // Tạo liên kết khóa ngoại giữa category_id và cột id trong bảng categories
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
