<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projeks', function (Blueprint $table) {
            $table->unsignedBigInteger('projek_kategori_id')->nullable()->after('id');
            $table->foreign('projek_kategori_id')->references('id')->on('projek_kategoris')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('projeks', function (Blueprint $table) {
            $table->dropForeign(['projek_kategori_id']);
            $table->dropColumn('projek_kategori_id');
        });
    }
};
