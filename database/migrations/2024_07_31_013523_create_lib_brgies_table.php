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
        Schema::create('lib_brgies', function (Blueprint $table) {
            $table->string('psgc', 10)->primary();  
            $table->string('col_brgy', 60);  
            $table->string('citmun_code', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_brgies');
    }
};
