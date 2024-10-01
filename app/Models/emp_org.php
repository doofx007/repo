<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_org extends Model
{
    use HasFactory;

    protected $table = 'emp_org';
    protected $primaryKey = 'org_count'; 

    public function emp_org()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
