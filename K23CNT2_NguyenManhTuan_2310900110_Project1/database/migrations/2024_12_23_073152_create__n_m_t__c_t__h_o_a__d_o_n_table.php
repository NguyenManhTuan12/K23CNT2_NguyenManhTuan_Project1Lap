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
        Schema::create('NMT_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
                        $table->bigInteger('nmtHoaDonID')->references('id')->on('NMT_HOA_DON');
            $table->bigInteger('nmtSanPhamID')->references('id')->on('NMT_SAN_PHAM');
            $table->integer('nmtSoLuongMua');
            $table->float('nmtDonGiaMua');
            $table->float('nmtThanhTien');
            $table->tinyInteger('nmtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NMT_CT_HOA_DON');
    }
};
