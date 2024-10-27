<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->string("url", 255);
            $table->string("thumbnail_url", 255);
            $table->text("content");
            $table->string("image_1_url", 255);
            $table->text("image_1_description");
            $table->string("image_2_url", 255);
            $table->text("image_2_description");
            $table->boolean("visible")->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
