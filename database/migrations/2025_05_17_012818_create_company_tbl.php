<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $table = array("name", "product_id");
    public function up(): void
    {
        Schema::create('company_tbl', function (Blueprint $table) {
            $table->id();
            $table->string("name", 32);
            $table->foreignId("product_id");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_tbl');
    }
};
