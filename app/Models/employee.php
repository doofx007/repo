<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $primaryKey = 'empid'; // Set the primary key to empid
    public $incrementing = false; // Since empid is not auto-incrementing
    protected $casts = ['empid' => 'string',];

    protected $fillable = [
        'emp_fname', 'emp_mname', 'emp_lname', 'emp_ext', 'emp_citizen', 'emp_dob', 'emp_pob', 'emp_sex', 'emp_civ_stat', 'emp_height', 'emp_weight', 'emp_blood', 'emp_cnum', 'emp_telnum', 'emp_age'
    ];
    
    // Define the relationship with the EmpAcc model
    public function empAcc()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }

    public function PersonalInfo()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }

    public function SecurityandContact()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
