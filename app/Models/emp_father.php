<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_father extends Model
{
    use HasFactory;

    protected $table = 'emp_father';
    protected $primaryKey = 'emp_count';
    
    

    public function empFather()
    {
        return $this->belongsTo(employee::class, 'emp_count', 'emp_count');
    }
}
