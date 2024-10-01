<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_otherinfo extends Model
{
    use HasFactory;
    protected $table = 'emp_otherinfo';
    protected $primaryKey = 'other_count';
    public function emp_otherinfo()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
