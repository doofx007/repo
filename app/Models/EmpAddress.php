<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpAddress extends Model
{
    use HasFactory;

    protected $table = 'emp_address';
    protected $primaryKey = 'emp_count';

    protected $fillable = [
        'emp_count', 'emp_house',
        'emp_subd', 'emp_brgy', 'emp_city', 'emp_prov', 'emp_region', 'emp_zip'
    ];

    public function empAddress2()
    {
        return $this->hasMany(EmpAddress2::class, 'emp_count', 'emp_count');
    }
}
