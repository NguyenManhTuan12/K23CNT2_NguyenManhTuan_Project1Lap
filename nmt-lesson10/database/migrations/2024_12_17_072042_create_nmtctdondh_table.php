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
        Schema::create('nmtctdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nmtSoDH');
            $table->string('nmtMaVTu');
            $table->integer('nmtSlDat');
            // Tạo khoá chính trên 2 cột (nmtSoDH,nmtMaVTu)
            $table->primary(['nmtSoDH','nmtMaVTu']);
            // Khoá ngoại 
            $table->foreign('nmtSoDH')->references('nmtSoDH')->on('nmtdondh');
            $table->foreign('nmtMaVTu')->references('nmtMaVTu')->on('nmtvattu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtctdondh');
    }
};
