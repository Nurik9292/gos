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
        Schema::create('footer_contents', function (Blueprint $table) {
            $table->id();
            $table->string("tel")->nullable();
            $table->string("email")->nullable();
            $table->string("address_tm")->nullable();
            $table->string("address_ru")->nullable();
            $table->string("address_en")->nullable();
            $table->string("work_tm")->nullable();
            $table->string("work_ru")->nullable();
            $table->string("work_en")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_contents');
    }
};
