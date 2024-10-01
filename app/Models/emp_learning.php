<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_learning extends Model
{
    use HasFactory;
    protected $table = 'emp_learning';
    protected $primaryKey = 'learn_count';
    public function emp_learning()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
