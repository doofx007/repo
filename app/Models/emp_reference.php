<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_reference extends Model
{
    use HasFactory;

    protected $table = 'emp_reference';
    protected $primaryKey = 'ref_count'; 
    public function emp_reference()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
