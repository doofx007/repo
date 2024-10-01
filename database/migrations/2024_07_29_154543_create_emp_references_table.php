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
        Schema::create('emp_reference', function (Blueprint $table) {
            $table->increments('ref_count');  
            $table->string('empid', 7);
            $table->string('ref_fname', 35);
            $table->string('ref_mname', 35);
            $table->string('ref_lname', 35);
            $table->string('ref_xname', 10)->nullable();
            $table->string('ref_add', 150);
            $table->integer('ref_cnum');
            $table->timestamps();  // Add timestamps for created_at and updated_ats

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
        Schema::dropIfExists('emp_reference');
    }
};
