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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string("tm_title")->nullable();
            $table->string("ru_title")->nullable();
            $table->string("en_title")->nullable();
            $table->text("tm_content")->nullable();
            $table->text("ru_content")->nullable();
            $table->text("en_content")->nullable();
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
