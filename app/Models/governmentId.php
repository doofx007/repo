<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class governmentId extends Model
{
    use HasFactory;

    protected $table = '';
    protected $primaryKey = 'empid'; // Set the primary key to empid
    public $incrementing = false; // Since empid is not auto-incrementing

    // Define the relationships with the other models
    public function sssinfo()
    {
        return $this->hasOne(sssinfo::class, 'empid', 'empid');
    }

    public function pagibiginfo()
    {
        return $this->hasOne(pagibiginfo::class, 'empid', 'empid');
    }

    public function gsisinfo()
    {
        return $this->hasOne(gsisinfo::class, 'empid', 'empid');
    }

    public function philhealthinfo()
    {
        return $this->hasOne(philhealthinfo::class, 'empid', 'empid');
    }

    public function tininfo()
    {
        return $this->hasOne(tininfo::class, 'empid', 'empid');
    }
}
