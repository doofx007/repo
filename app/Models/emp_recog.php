<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_recog extends Model
{
    use HasFactory;
    protected $table = 'emp_recog';
    protected $primaryKey = 'recog_count';
    public function emp_recog()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
