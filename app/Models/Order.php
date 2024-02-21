<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "lead_name",
        "lead_id",
        "insurance_cover_rate_id",
        "benefit",
        "benefit_id"
    ];
}
