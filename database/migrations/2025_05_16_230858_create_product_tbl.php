<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_tbl', function (Blueprint $table) {
            $table->id();
            $table->string("name", 32);
            $table->double("price");
            $table->integer("quantity");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_tbl');
    }
};
