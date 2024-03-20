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
        Schema::create('tbl_invite_group', function (Blueprint $table) {
            $table->id();
            $table->int("idgrup");
            $table->text("desc");
            $table->foreignId("dari");
            $table->foreignId("untuk");
            $table->integer("stime");
            $table->integer("htime");
            $table->string("flat")->nullable();
            $table->integer("kodeint");
            $table->integer("intyear");
            $table->integer("inrate");
            $table->string("ackal");
            $table->integer("prioritas");
            $table->foreignId("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_invite_group');
    }
};
