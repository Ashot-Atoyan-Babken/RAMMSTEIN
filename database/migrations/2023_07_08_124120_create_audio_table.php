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
        Schema::create('audio', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('song_name');
            $table->unsignedBigInteger('album_id')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('album_id', 'audio_album_idx');
            $table->foreign('album_id', 'audio_album_fk')->on('albums')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audio');
    }
};
