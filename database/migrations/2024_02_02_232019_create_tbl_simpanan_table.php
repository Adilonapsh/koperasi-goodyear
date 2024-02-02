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
            $table->string("ytd_wajib");
            $table->string("ytd_rela");
            $table->string("ytd_ambil");
            $table->string("ytd_ykg");
            $table->string("ytd_sosial");
            $table->string("mtd_wajib01");
            $table->string("mtd_wajib02");
            $table->string("mtd_wajib03");
            $table->string("mtd_wajib04");
            $table->string("mtd_wajib05");
            $table->string("mtd_wajib06");
            $table->string("mtd_wajib07");
            $table->string("mtd_wajib08");
            $table->string("mtd_wajib09");
            $table->string("mtd_wajib10");
            $table->string("mtd_wajib11");
            $table->string("mtd_wajib12");
            $table->string("mtd_rela01");
            $table->string("mtd_rela02");
            $table->string("mtd_rela03");
            $table->string("mtd_rela04");
            $table->string("mtd_rela05");
            $table->string("mtd_rela06");
            $table->string("mtd_rela07");
            $table->string("mtd_rela08");
            $table->string("mtd_rela09");
            $table->string("mtd_rela10");
            $table->string("mtd_rela11");
            $table->string("mtd_rela12");
            $table->string("mtd_ambil01");
            $table->string("mtd_ambil02");
            $table->string("mtd_ambil03");
            $table->string("mtd_ambil04");
            $table->string("mtd_ambil05");
            $table->string("mtd_ambil06");
            $table->string("mtd_ambil07");
            $table->string("mtd_ambil08");
            $table->string("mtd_ambil09");
            $table->string("mtd_ambil10");
            $table->string("mtd_ambil11");
            $table->string("mtd_ambil12");
            $table->string("mtd_activ01");
            $table->string("mtd_activ02");
            $table->string("mtd_activ03");
            $table->string("mtd_activ04");
            $table->string("mtd_activ05");
            $table->string("mtd_activ06");
            $table->string("mtd_activ07");
            $table->string("mtd_activ08");
            $table->string("mtd_activ09");
            $table->string("mtd_activ10");
            $table->string("mtd_activ11");
            $table->string("mtd_activ12");
            $table->string("mtd_ykg01");
            $table->string("mtd_ykg02");
            $table->string("mtd_ykg03");
            $table->string("mtd_ykg04");
            $table->string("mtd_ykg05");
            $table->string("mtd_ykg06");
            $table->string("mtd_ykg07");
            $table->string("mtd_ykg08");
            $table->string("mtd_ykg09");
            $table->string("mtd_ykg10");
            $table->string("mtd_ykg11");
            $table->string("mtd_ykg12");
            $table->string("mtd_sosial01");
            $table->string("mtd_sosial02");
            $table->string("mtd_sosial03");
            $table->string("mtd_sosial04");
            $table->string("mtd_sosial05");
            $table->string("mtd_sosial06");
            $table->string("mtd_sosial07");
            $table->string("mtd_sosial08");
            $table->string("mtd_sosial09");
            $table->string("mtd_sosial10");
            $table->string("mtd_sosial11");
            $table->string("mtd_sosial12");
            $table->string("seq");
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
