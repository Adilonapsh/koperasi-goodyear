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
        Schema::create('tbl_simpanan', function (Blueprint $table) {
            $table->id();
            $table->string("cc");
            $table->text("ytd_wajib");
            $table->text("ytd_rela");
            $table->text("ytd_ambil");
            $table->text("ytd_ykg");
            $table->text("ytd_sosial");
            $table->text("mtd_wajib01");
            $table->text("mtd_wajib02");
            $table->text("mtd_wajib03");
            $table->text("mtd_wajib04");
            $table->text("mtd_wajib05");
            $table->text("mtd_wajib06");
            $table->text("mtd_wajib07");
            $table->text("mtd_wajib08");
            $table->text("mtd_wajib09");
            $table->text("mtd_wajib10");
            $table->text("mtd_wajib11");
            $table->text("mtd_wajib12");
            $table->text("mtd_rela01");
            $table->text("mtd_rela02");
            $table->text("mtd_rela03");
            $table->text("mtd_rela04");
            $table->text("mtd_rela05");
            $table->text("mtd_rela06");
            $table->text("mtd_rela07");
            $table->text("mtd_rela08");
            $table->text("mtd_rela09");
            $table->text("mtd_rela10");
            $table->text("mtd_rela11");
            $table->text("mtd_rela12");
            $table->text("mtd_ambil01");
            $table->text("mtd_ambil02");
            $table->text("mtd_ambil03");
            $table->text("mtd_ambil04");
            $table->text("mtd_ambil05");
            $table->text("mtd_ambil06");
            $table->text("mtd_ambil07");
            $table->text("mtd_ambil08");
            $table->text("mtd_ambil09");
            $table->text("mtd_ambil10");
            $table->text("mtd_ambil11");
            $table->text("mtd_ambil12");
            $table->text("mtd_activ01");
            $table->text("mtd_activ02");
            $table->text("mtd_activ03");
            $table->text("mtd_activ04");
            $table->text("mtd_activ05");
            $table->text("mtd_activ06");
            $table->text("mtd_activ07");
            $table->text("mtd_activ08");
            $table->text("mtd_activ09");
            $table->text("mtd_activ10");
            $table->text("mtd_activ11");
            $table->text("mtd_activ12");
            $table->text("mtd_ykg01");
            $table->text("mtd_ykg02");
            $table->text("mtd_ykg03");
            $table->text("mtd_ykg04");
            $table->text("mtd_ykg05");
            $table->text("mtd_ykg06");
            $table->text("mtd_ykg07");
            $table->text("mtd_ykg08");
            $table->text("mtd_ykg09");
            $table->text("mtd_ykg10");
            $table->text("mtd_ykg11");
            $table->text("mtd_ykg12");
            $table->text("mtd_sosial01");
            $table->text("mtd_sosial02");
            $table->text("mtd_sosial03");
            $table->text("mtd_sosial04");
            $table->text("mtd_sosial05");
            $table->text("mtd_sosial06");
            $table->text("mtd_sosial07");
            $table->text("mtd_sosial08");
            $table->text("mtd_sosial09");
            $table->text("mtd_sosial10");
            $table->text("mtd_sosial11");
            $table->text("mtd_sosial12");
            $table->text("seq");
            $table->string("username");
            $table->date("date");
            $table->time("time");
            $table->foreignId("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_simpanan');
    }
};
