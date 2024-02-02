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
        Schema::create('fjkr_detail', function (Blueprint $table) {
            $table->id();
            $table->string("no_fj");
            $table->string("kode_barang");
            $table->string("harga_jual");
            $table->string("jumlah_harga");
            $table->integer("pot");
            $table->string("barcode");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fjkr_detail');
    }
};
