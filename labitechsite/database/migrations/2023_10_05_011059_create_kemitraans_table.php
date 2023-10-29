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
        Schema::create('kemitraans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('pictheader');
            $table->string('titlevid');
            $table->string('shortdescvid');
            $table->string('linkvid');
            $table->string('pictfooter');
            $table->string('promotiontext');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kemitraans');
    }
};


