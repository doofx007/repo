<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpAddress2 extends Model
{
    use HasFactory;

    protected $table = 'emp_address2';
    protected $primaryKey = 'emp_count';

    protected $fillable = [
        'emp_count', 'emp_house2', 
        'emp_subd2', 'emp_brgy2', 'emp_city2', 'emp_prov2', 'emp_region2', 'emp_zip2'
    ];

    public function empAddress()
    {
        return $this->belongsTo(EmpAddress::class, 'emp_count', 'emp_count');
    }

}
