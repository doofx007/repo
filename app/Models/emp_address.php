<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpAddress extends Model
{
    use HasFactory;

    protected $table = 'emp_address';
    protected $primaryKey = 'add_count';

}
