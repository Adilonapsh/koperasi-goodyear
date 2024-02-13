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
            $table->string("harga_barang");
            $table->string("jumlah_barang");
            $table->integer("pot")->nullable();
            $table->string("barcode")->nullable();
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
