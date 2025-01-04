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
        Schema::create('nmtctpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nmtSoPX');
            $table->string('nmtMaVTu');
            $table->integer('nmtSlXuat');
            $table->float('nmtDgXuat');
            // primary
            $table->primary(['nmtSoPX','nmtMaVTu']);
            // foreign
            $table->foreign('nmtSoPX')->references('nmtSoPX')->on('nmtpxuat');
            $table->foreign('nmtMaVTu')->references('nmtMaVTu')->on('nmtvattu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtctpxuat');
    }
};
