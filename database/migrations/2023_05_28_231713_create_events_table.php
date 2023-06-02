<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img');
            $table->string('title', 255);
            $table->text('description', 500);
            $table->string('city', 255);
            $table->boolean('private');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
