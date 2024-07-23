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
        Schema::table('products', function(Blueprint $table){
            $table -> dropColumn('price_product');
            $table -> dropColumn(['votes']);
            $table -> dropColumn('view');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price_product', 10, 2)->nullable()->after('name'); // Thêm cột 'price_product'
            $table->integer('votes')->nullable()->after('price_product'); // Thêm cột 'votes'
            $table->integer('view')->nullable()->after('votes'); // Thêm cột 'view'
        });
    }
};
