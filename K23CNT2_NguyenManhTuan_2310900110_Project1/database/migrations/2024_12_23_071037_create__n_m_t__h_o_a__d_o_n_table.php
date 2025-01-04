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
        Schema::create('NMT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('nmtMaHoaDon', 255)->unique();

            $table->bigInteger('nmtMakhachHang')->references('id')->on('NMT_KHACH_HANG');
            $table->date('nmtNgayHoaDon');
            $table->string('nmtHoTenKhachHang', 255);
            $table->string('nmtEmail', 255);
            $table->string('nmtDienThoai', 255);
            $table->string('nmtDiaChi', 255);
            $table->float('nmtTongTriGia');
            $table->tinyInteger('nmtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NMT_HOA_DON');
    }
};
