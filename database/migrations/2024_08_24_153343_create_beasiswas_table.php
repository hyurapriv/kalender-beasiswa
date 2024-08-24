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
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->index();
            $table->string('title'); // Judul Beasiswa
            $table->text('description'); // Deskripsi Beasiswa
            $table->enum('education_level', ['D3', 'S1', 'S2', 'S3']); // Tingkatan Beasiswa
            $table->string('country'); // Negara Beasiswa
            $table->string('university'); // Universitas Beasiswa
            $table->string('major'); // Jurusan Beasiswa
            $table->text('benefits'); // Keuntungan Beasiswa
            $table->integer('age_min')->nullable(); // Ketentuan umur minimal
            $table->integer('age_max')->nullable(); // Ketentuan umur maksimal
            $table->decimal('gpa_min', 4, 2)->nullable(); // GPA minimal
            $table->decimal('gpa_max', 4, 2)->nullable(); // GPA maksimal
            $table->text('english_tests')->nullable(); // Tes Bahasa Inggris
            $table->text('required_documents')->nullable(); // Dokumen yang dibutuhkan
            $table->date('registration_open'); // Tanggal pendaftaran dibuka
            $table->date('registration_close'); // Tanggal pendaftaran ditutup
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Status beasiswa
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
