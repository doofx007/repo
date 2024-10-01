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
        Schema::create('sssinfo', function (Blueprint $table) {
            $table->increments('sss_count');  
            $table->string('empid', 7);
            $table->string('sss_num', 20);
            $table->string('sss_type', 200);
            $table->decimal('sss_amt', 10,2);
            $table->decimal('sss_stat', 10,2);
            $table->decimal('sss_ec', 10,2);
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
        Schema::dropIfExists('sssinfo');
    }
};
