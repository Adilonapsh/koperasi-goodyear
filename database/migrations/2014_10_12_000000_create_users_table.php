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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('cc')->nullable();
            $table->string('min_belanja')->default(0);
            $table->string('maks_ds')->nullable();
            $table->bigInteger('pinjaman_sebelumnya')->nullable();
            $table->bigInteger('total_belanja')->nullable();
            $table->string('sisa_lalu')->nullable();
            $table->text('ket')->nullable();
            $table->string('plafon')->nullable();
            $table->string('pk')->nullable();
            $table->bigInteger('saldo')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
