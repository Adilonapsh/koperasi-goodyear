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
            $table->text("desc");
            $table->foreignId("from_user");
            $table->foreignId("to_user");
            $table->integer("stime");
            $table->integer("htime");
            $table->string("flat");
            $table->int("kode_int");
            $table->int("year");
            $table->int("rate");
            $table->int("achkal");
            $table->int("prioritas");
            $table->foreignId("user_id");
            $table->$table->timestamps();
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
