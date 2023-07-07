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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('song_name');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->index('category_id', 'post_category_idx');
            $table->foreign('category_id', 'post_category_fk')->on('songs')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};