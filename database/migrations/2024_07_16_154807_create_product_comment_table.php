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
        Schema::create('product_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userID');
            $table->unsignedInteger('productID');
            $table->string('comment',500);
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('productID')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_comment');
    }
};
