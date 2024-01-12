<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['Customer', 'Teknisi', 'Admin'])
                ->default('Customer');
            $table->enum('service', ['Kipas Angin', 'Mesin Cuci', 'AC', 'Microwave', 'Kulkas', 'Kompor', 'Oven'])->nullable();
            $table->string('deskripsi')->nullable();
            $table->enum('pengalaman', ['Pengalaman < 1 tahun', 'Pengalaman 3+ tahun', 'Pengalaman 4+ tahun', 'Pengalaman 5+ tahun', 'Pengalaman 6+ tahun', 'Pengalaman 9+ tahun'])->nullable();
            $table->enum('rating', ['1', '2', '3', '4', '5'])->nullable();
            $table->rememberToken();
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
