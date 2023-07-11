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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tour_photo');
            $table->unsignedBigInteger('tour_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('tour_id', 'concert_tour_idx');
            $table->foreign('tour_id', 'concert_tour_fk')->on('tours')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
