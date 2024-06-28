<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'staffs';
    protected $primaryKey = 'staffid';
    protected $fillable = ['StaffName', 'StaffEmail', 'StaffPassword', 'StaffPhoneNo'];
    public $timestamps = false;

    public function Staffs()
    {
        return $this->belongsTo(Staffs::class);
    }
}
