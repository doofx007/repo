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
        Schema::create('lib_acc_status', function (Blueprint $table) {
            $table->increments('lib_count');  
            $table->string('empid');
            $table->string('lib_stat', 35);  
            $table->string('lib_desc', 35);  
            $table->timestamps();  // Add timestamps for created_at and updated_at

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
        Schema::dropIfExists('lib_acc_status');
    }
};
