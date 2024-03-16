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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('about_text_id');
            $table->string('tm_title')->nullable();
            $table->string('ru_title')->nullable();
            $table->string('en_title')->nullable();
            $table->text('tm_content')->nullable();
            $table->text('ru_content')->nullable();
            $table->text('en_content')->nullable();
            $table->string('image');
            $table->timestamps();

            $table->foreign('about_text_id', 'about_about_text_id_fk')
                ->on('about_texts')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
