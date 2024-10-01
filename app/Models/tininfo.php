<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tininfo extends Model
{
    use HasFactory;
    protected $table = 'tininfo';
    protected $primaryKey = 'tin_count';
    public function tininfo()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
