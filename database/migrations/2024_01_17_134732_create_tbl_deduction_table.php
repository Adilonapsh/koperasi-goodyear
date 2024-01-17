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
        Schema::create('tbl_deduction', function (Blueprint $table) {
            $table->id();
            $table->boolean("active");
            $table->date("tanggal");
            $table->string("cc");
            $table->integer("bulan");
            $table->integer("group");
            $table->string("principal");
            $table->string("interest");
            $table->string("original");
            $table->string("balance");
            $table->integer("paytime");
            $table->integer("repaytime");
            $table->integer("aruded");
            $table->string("dedprin");
            $table->foreignId("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_deduction');
    }
};
