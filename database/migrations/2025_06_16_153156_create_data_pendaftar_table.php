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
        Schema::create('data_pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nisn')->unique();
            $table->enum('jkelamin', ['Laki-laki', 'Perempuan']);
            $table->string('no_akta')->nullable();
            $table->string('agama');
            $table->string('disabilitas')->nullable();
            $table->text('alamat');
            $table->string('rt', 5)->nullable();
            $table->string('rw', 5)->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('tinggal_brsm')->nullable();
            $table->string('transportasi')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->string('nik')->unique();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('foto_siswa')->nullable();
            $table->string('status_siswa')->default('Belum Diverifikasi'); // misalnya status default
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pendaftar');
    }
};
