<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AddressController;

class lib_brgy extends Model
{
    use HasFactory;

    protected $table = 'lib_brgies';
    protected $primaryKey = 'brgy_psgc';
    public $incrementing = false;
    protected $fillable = ['brgy_psgc', 'col_brgy', 'citmun_psgc'];
}
