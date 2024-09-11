<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->decimal('price', 15, 2)->change(); // Mengubah kolom price
        });
    }
    
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->change(); // Mengembalikan ke pengaturan semula jika diperlukan
        });
    }
    
};
