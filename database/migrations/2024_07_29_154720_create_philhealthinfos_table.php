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
        Schema::create('philhealthinfo', function (Blueprint $table) {
            $table->increments('phl_count');  
            $table->string('empid', 7);
            $table->string('ph_lid', 20);
            $table->string('phl_stat', 200);
            $table->decimal('phl_com', 10,2);
            $table->decimal('phl_mem', 10,2);
            $table->decimal('phl_emp', 10,2);
            $table->timestamps();  // Add timestamps for created_at and updated_at

            // Define foreign key constraint with onDelete and onUpdate actions
            $table->foreign('empid')
                  ->references('empid')
                  ->on('emp_acc')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('philhealthinfo');
    }
};
