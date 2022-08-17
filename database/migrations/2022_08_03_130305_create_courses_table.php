<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('courses', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->string('text');
            $table->string('link');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
