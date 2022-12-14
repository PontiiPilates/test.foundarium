<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driving extends Model
{
    use HasFactory;

    protected $table = 'list_drivings';

    protected $fillable = ['car_id', 'driver_id', 'status'];
}
