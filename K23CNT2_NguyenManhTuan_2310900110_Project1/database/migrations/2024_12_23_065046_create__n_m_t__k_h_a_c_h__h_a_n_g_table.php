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
        Schema::create('NMT_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('nmtMakhachHang',255)->unique();
            $table->string('nmtHoVaTenKhachHang',255);
            $table->string('nmtEmail',255);
            $table->string('nmtMatKhau',255);
            $table->string('nmtDienThoai',255);
            $table->string('nmtDiaChi',255);
            $table->date('nmtNgayDangKy');
            $table->tinyInteger('nmtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NMT_KHACH_HANG');
    }
};
