<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_work extends Model
{
    use HasFactory;
    protected $table = 'emp_work';
    protected $primaryKey = 'work_count'; 
    public function emp_work()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
