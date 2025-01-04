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
        Schema::create('NMT_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nmtMaLoai',255)->unique();
            $table->string('nmtTenLoai',255);
            $table->tinyInteger('nmtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NMT_LOAI_SAN_PHAM');
    }
};
