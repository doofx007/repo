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
        Schema::create('lib_positions', function (Blueprint $table) {
            $table->increments('lib6_count');    
            $table->string('lib6_posname', 35);
            $table->string('lib6_parenthetical_title', 35);
            $table->string('lib6_pos_level', 35);
            $table->string('lib6_salary_grade', 35);  
            $table->timestamps();  // Add timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_positions');
    }
};
