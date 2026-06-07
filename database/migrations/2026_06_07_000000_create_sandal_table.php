<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sandal', function (Blueprint $table) {
            $table->increments('kodesandal');  // INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ("AutoNumber" di soal)
            $table->string('merksandal', 30);  // VARCHAR(30)
            $table->integer('stocksandal');    // INT
            $table->char('tersedia', 1);       // CHAR(1): 'Y' = Ya, 'T' = Tidak
            // sengaja tanpa timestamps karena tidak ada di spesifikasi tugas
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sandal');
    }
};
