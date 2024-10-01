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
        Schema::create('emp_address', function (Blueprint $table) {
            $table->unsignedInteger('emp_count');
            $table->string('emp_house',20)->nullable();
            $table->string('emp_subd',60)->nullable(); //30 for subdivisions with high character count
            $table->string('emp_brgy',60);
            $table->string('emp_city',60);
            $table->string('emp_prov',60);
            $table->string('emp_region',60);
            $table->string('emp_country',60); //60 for the countries with high character count
            $table->string('emp_zip',6);
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
        Schema::dropIfExists('emp_address');
    }
};
