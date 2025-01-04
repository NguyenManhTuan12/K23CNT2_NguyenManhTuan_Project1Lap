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
        Schema::create('nmtctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nmtSoPN');
            $table->string('nmtMaVTu');
            $table->integer('nmtSlNhap');
            $table->float('nmtDgNhap');
            // primary
            $table->primary(['nmtSoPN','nmtMaVTu']);
            // foreign
            $table->foreign('nmtSoPN')->references('nmtSoPN')->on('nmtpnhap');
            $table->foreign('nmtMaVTu')->references('nmtMaVTu')->on('nmtvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtctpnhap');
    }
};
