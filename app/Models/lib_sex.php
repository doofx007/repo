<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lib_sex extends Model
{
    use HasFactory;

    protected $table = 'lib_sexes';
    protected $primaryKey = 'lib4_count';
    public $incrementing = true;
    public $timestamps = true;
}
