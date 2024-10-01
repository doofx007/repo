<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmpAcc extends Authenticatable
{
    use HasFactory, Notifiable;

    // Specify the table name
    protected $table = 'emp_acc';

    // Specify the primary key field
    protected $primaryKey = 'empid';
    public $incrementing = false;

    // Specify the fillable fields
    protected $fillable = [
        'empid',
        'empuser',
        'empmail',
        'emppass',
        'user_type'
    ];

    // Specify the hidden fields
    protected $hidden = [
        'emppass',
        'remember_token',
    ];

    // Specify the casts
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mutator to hash the password before saving it
    public function setPasswordAttribute($value)
    {
        $this->attributes['emppass'] = bcrypt($value);
    }

    // Override to get the password for authentication
    public function getAuthPassword()
    {
        return $this->emppass;
    }
}
