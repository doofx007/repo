<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AddressController;

class lib_region extends Model
{
    use HasFactory;

    protected $table = 'lib_regions';
    protected $primaryKey = 'reg_psgc';
    public $incrementing = false;
    protected $fillable = ['reg_psgc', 'col_region'];
}
