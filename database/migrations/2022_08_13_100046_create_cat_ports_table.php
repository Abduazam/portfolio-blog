<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cat_ports', static function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cat_id');
            $table->foreign('cat_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->unsignedInteger('port_id');
            $table->foreign('port_id')
                ->references('id')
                ->on('portfolios')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cat_ports');
    }
};
