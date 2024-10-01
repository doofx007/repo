<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lib_blood_type extends Model
{
    use HasFactory;

    protected $table = 'lib_blood_types';
    protected $primaryKey = 'lib2_count';
    public $incrementing = true;
    public $timestamps = true;
}
