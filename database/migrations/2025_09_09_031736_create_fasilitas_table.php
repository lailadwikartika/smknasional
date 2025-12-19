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
    Schema::create('fasilitas', function (Blueprint $table) {
        $table->id('id_fasilitas');
        $table->foreignId('id_user')->nullable()->constrained('users', 'id_user')->onDelete('set null');
        $table->string('nama_fasilitas')->unique();
        $table->text('keterangan')->nullable();
        $table->string('foto')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
