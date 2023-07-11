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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('photos');
            $table->unsignedBigInteger('concert_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('concert_id', 'pic_concert_idx');
            $table->foreign('concert_id', 'pic_concert_fk')->on('concerts')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};
