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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('emp_count'); // Primary key
            $table->string('empid', 7)->unique(); // Ensure empid is unique if used as a reference
            $table->string('emp_fname', 35);
            $table->string('emp_mname', 35)->nullable();
            $table->string('emp_lname', 35);
            $table->string('emp_ext', 10)->nullable();
            $table->date('emp_dob');
            $table->string('emps_ex', 10);
            $table->string('emp_blood', 10);
            $table->decimal('emp_height', 5, 2);
            $table->integer('emp_weight');
            $table->string('emp_cnum', 15);
            $table->string('emp_mail', 35)->unique(); // Ensure email is unique
            $table->string('emp_idlicense', 35)->nullable();
            $table->string('emp_idplace', 35)->nullable();
            $table->string('emp_iduse', 35)->nullable();
            $table->date('emp_iddate')->nullable();
            $table->string('emp_telnum', 15)->nullable();
            $table->string('emp_religion', 35)->nullable();
            $table->integer('empage')->nullable();
            $table->integer('User_type')->nullable();
            $table->string('other_40b', 5)->nullable();
            $table->string('esignature', 35)->nullable(); // accepts pdf,png,jpeg only
            $table->string('emp_disability', 5)->nullable(); // yes or no if no fill up in emp_pwd
            $table->string('emp_ip', 5)->nullable(); // yes or no if no fill up in emp_ip_group
            $table->string('emp_pwd', 35)->nullable();
            $table->string('emp_ip_group', 35)->nullable();
            $table->timestamps(); // Add timestamps for created_at and updated_at

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
        Schema::dropIfExists('employees');
    }
};
