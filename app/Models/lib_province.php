<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AddressController;

class lib_province extends Model
{
    use HasFactory;

    protected $table = 'lib_provinces';
    protected $primaryKey = 'prv_psgc';
    public $incrementing = false;
    protected $fillable = ['prv_psgc', 'col_province', 'reg_psgc'];

    protected $guarded = [];
    
}
