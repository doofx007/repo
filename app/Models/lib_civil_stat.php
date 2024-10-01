<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lib_civil_stat extends Model
{
    use HasFactory;

    protected $table = 'lib_civil_stats';
    protected $primaryKey = 'lib3_count';
    public $incrementing = true;
    public $timestamps = true;
}
