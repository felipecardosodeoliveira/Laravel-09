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
        // acessar a tabela "products" e criar uma nova coluna
           Schema::table("products", function(Blueprint $table) {
            $table->integer("min_quantity")
                ->default(1) 
                ->after('qtde');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("products", function(Blueprint $table) {
            $table->dropColumn("min_quantity");
        });
    }
};
