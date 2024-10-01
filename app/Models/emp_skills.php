<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_skills extends Model
{
    use HasFactory;
    protected $table = 'emp_skills';
    protected $primaryKey = 'skill_count';
    public function emp_skills()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
