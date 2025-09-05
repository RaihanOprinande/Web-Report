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
        Schema::create('projek_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projek_id')->constrained('projeks')->onDelete('cascade');
            $table->string('task');
            $table->enum('status', ['belum dikerjakan', 'sedang dikerjakan', 'selesai'])->default('belum dikerjakan');
            $table->foreignId('handler')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projek_tasks');
    }
};
