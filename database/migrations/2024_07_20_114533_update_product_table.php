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
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('id', 'product_id');
            $table->string('description', 500)->nullable();
            $table->float('price', 10, 2)->default(800.02);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('product_id', 'id');
            $table->dropColumn('description');
            $table->dropColumn('price');
        });
    }
};
