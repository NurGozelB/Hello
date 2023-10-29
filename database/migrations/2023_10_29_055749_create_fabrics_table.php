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
        Schema::create('fabrics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->unsignedBigInteger('fabricTexture_id')->index();
            $table->foreign('fabricTexture_id')->references('id')->on('fabric_textures')->cascadeOnDelete();
            $table->unsignedBigInteger('color_id')->index();
            $table->foreign('color_id')->references('id')->on('colors')->cascadeOnDelete();
            $table->unsignedBigInteger('fabricType_id')->index();
            $table->foreign('fabricType_id')->references('id')->on('fabric_types')->cascadeOnDelete();
            $table->unsignedBigInteger('country_id')->index();
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->mediumText('description');
            $table->decimal('price')->default(0);
            $table->unsignedDouble('discount_percent');
            $table->string('name');
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabrics');
    }
};
