<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    use HasFactory;

    protected $table = 'education';
    protected $primaryKey = 'educ_count'; 
    public function Education()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
