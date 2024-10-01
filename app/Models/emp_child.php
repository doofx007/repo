<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_child extends Model
{
    use HasFactory;
    protected $table = 'emp_child';
    protected $primaryKey = 'child_count'; 
    public function emp_child()
    {
        return $this->belongsTo(EmpAcc::class, 'emp_count', 'emp_count');
    }

    public function empChild()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
