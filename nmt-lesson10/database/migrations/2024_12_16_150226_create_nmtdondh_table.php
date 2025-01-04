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
        Schema::create('nmtdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nmtSoDH')->primary();
            $table->date('nmtNgayDH');
            $table->string('nmtMaNCC');
            $table->foreign('nmtMaNCC')->references('nmtMaNCC')->on('nmtnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmtdondh');
    }
};
