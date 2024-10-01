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
        Schema::create('emp_mother', function (Blueprint $table) {
            $table->increments('mother_count');
            $table->unsignedInteger('emp_count');  
            $table->string('mother_fname',35)->nullable();
            $table->string('mother_mname',35)->nullable();
            $table->string('mother_lname',35)->nullable();
            $table->string('maidenname',35)->nullable();
            $table->timestamps();  // Add timestamps for created_at and updated_at

            // Define foreign key constraint
            $table->foreign('emp_count')
            ->references('emp_count')
            ->on('employee')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_mother');
    }
};
