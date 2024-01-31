<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        "vehicle_use",
        "vehicle_value",
        "vehicle_model",
        "yom",
        "cover_start_date",
        "vehicle_type",
        "passenger_count",
        "name",
        "phone",
        "email"


    ];

}
