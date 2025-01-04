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
        Schema::create('NMT_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('nmtTaiKhoan',255)->unique();
            $table->string('nmtMatKhau',255);
            $table->tinyInteger('nmtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NMT_QUAN_TRI');
    }
};
