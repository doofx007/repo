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
        Schema::create('emp_address2', function (Blueprint $table) {
            $table->unsignedInteger('emp_count')->change();  
            $table->string('emp_house2',20)->nullable();
            $table->string('emp_subd2',60)->nullable(); //30 for subdivisions with high character count
            $table->string('emp_brgy2',60)->nullable();
            $table->string('emp_city2',60)->nullable();
            $table->string('emp_prov2',60)->nullable();
            $table->string('emp_region2',60)->nullable();
            $table->string('emp_country2',60)->nullable(); //60 for the countries with high character count
            $table->string('emp_zip2s',6)->nullable();

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
        Schema::dropIfExists('emp_address2');
    }
};
