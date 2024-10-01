<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AddressController;

class lib_city extends Model
{
    use HasFactory;

    protected $table = 'lib_cities';
    protected $primaryKey = 'citmun_psgc';
    public $incrementing = false;
    protected $fillable = ['citmun_psgc', 'col_citymuni', 'prv_psgc'];
}
