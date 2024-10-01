<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sssinfo extends Model
{
    use HasFactory;
    protected $table = 'sssinfo';
    protected $primaryKey = 'sss_count';
    public function sssinfo()
    {
        return $this->belongsTo(EmpAcc::class, 'empid', 'empid');
    }
}
