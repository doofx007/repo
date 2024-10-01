<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gsisinfo extends Model
{
    use HasFactory;
    protected $table = 'gsisinfo';
    protected $primaryKey = 'gsis_count';
    public function gsis()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
