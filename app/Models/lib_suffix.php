<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lib_suffix extends Model
{
    use HasFactory;

    protected $table = 'lib_suffixes';
    protected $primaryKey = 'lib1_count';
    public $incrementing = true;
    public $timestamps = true;
}
