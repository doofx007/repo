<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpFamily extends Model
{
    
    use HasFactory;
  
    public function EmpFamily()
    {
        return $this->belongsTo(EmpAcc::class, 'emp_count', 'emp_count');
    }
}
