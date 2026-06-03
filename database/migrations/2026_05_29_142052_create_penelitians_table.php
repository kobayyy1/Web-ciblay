<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama_peneliti');
            $table->string('avatar')->nullable();
            $table->text('image')->nullable(); 
            $table->text('deskripsi_singkat');
            $table->longText('deskripsi_lengkap');
            $table->string('file_pdf')->nullable();
            $table->date('tanggal_penelitian');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penelitians');
    }
};
