<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        "valued_in_last_18_months",
        "vehicle_value",
        "vehicle_model",
        "vehicle_use",
        "vehicle_type",
        "passenger_count",
        "yom",
        "cover_start_date",
        "name",
        "phone",
        "email"


    ];

}
