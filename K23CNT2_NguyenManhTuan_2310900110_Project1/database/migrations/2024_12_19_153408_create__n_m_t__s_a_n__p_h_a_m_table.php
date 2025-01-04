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
        Schema::create('NMT_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nmtMaSanPham',255)->unquie();
            $table->string('nmtTenSanPham',255);
            $table->string('nmtHinhAnh',255);
            $table->integer('nmtSoLuong');
            $table->float('nmtDongia');
            $table->bigInteger('nmtMaLoai')->references('id')->on('NMT_LOAI_SAN_PHAM');
            $table->tinyInteger('nmtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NMT_SAN_PHAM');
    }
};
