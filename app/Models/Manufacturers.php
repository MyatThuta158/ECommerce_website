<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    use HasFactory;

    protected $table='manufacturers';
    protected $primaryKey='ManufacturerId';
    protected $fillable=['ManufacturerName','ManufacturerEmail','ManufacturerPhoneNo','ManufacturerAddress'];
    public $timestamps=false;
}
