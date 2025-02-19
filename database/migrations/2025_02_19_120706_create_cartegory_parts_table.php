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
        Schema::create('category_part', function (Blueprint $table) {
            $table->id();
            $table->uuid('category_uuid');
            $table->uuid('part_uuid');
            $table->timestamps();

            $table->foreign('category_uuid')->references('uuid')->on('categories')->onDelete('cascade');
            $table->foreign('part_uuid')->references('uuid')->on('parts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartegory_parts');
    }
};
