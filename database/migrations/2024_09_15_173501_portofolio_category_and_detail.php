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
        Schema::create('portofolio_category_and_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portofolio_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('portofolio_detail_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio_category_and_detail');
    }
};
